#include "includes/output.h"

void print_line(char *string, char *string2)
{
	int ctr;
	int ctr2;
	char sendbuff[255];
	char timebuff[5];
	char timebuff2[5];
	struct tm *timenow;
	time_t now;

	if ( strlen(outputfile) ){
		memset(sendbuff, '\0', sizeof(sendbuff));
		ctr = 0;
		ctr2 = 0;
                do {
                        if ( string[ctr] == '%' && string[ctr + 1] == 's' ){
				strcat(sendbuff, string2);
				ctr += 2;
                        }
                        sendbuff[strlen(sendbuff)] = string[ctr];
                        ctr ++;
                } while ( string[ctr] != '\0' );
		
		fputs(sendbuff, wfp);
	}

	if(!irc) printf(string, string2);
	if(irc){
		ctr = 0;
		ctr2 = 0;
	        memset(sendbuff, '\0', sizeof(sendbuff));
		snprintf(sendbuff, sizeof(sendbuff), "PRIVMSG %s :", user);
		do {
			if ( string[0] == '\n' && ctr == 0) ctr++;
			if ( string[ctr] == '%' && string[ctr + 1] == 's' ){
				do {
					sendbuff[strlen(sendbuff)] = string2[ctr2];
					ctr2++;
				} while ( string2[ctr2] != '\0' );
				ctr += 2;
			}
			sendbuff[strlen(sendbuff)] = string[ctr];
			ctr++;
		} while ( string[ctr] != '\0' );
		strcat(sendbuff, "\r\n");
	        irc_sendData(sendbuff, strlen(sendbuff));
		
                time(&now);
                timenow = gmtime(&now);

		memset(timebuff, '\0', sizeof(timebuff));
        	strftime(timebuff, sizeof(timebuff), "%S", timenow);
		strcpy(timebuff2, timebuff);
		while(! strcmp(timebuff, timebuff2)){
			time(&now);
		        timenow = gmtime(&now);
			memset(timebuff2, '\0', sizeof(timebuff2));
			strftime(timebuff2, sizeof(timebuff2), "%S", timenow);
		}
	}

	return;
}

