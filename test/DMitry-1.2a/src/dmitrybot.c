#include "includes/dmitrybot.h"
#include "includes/global.h"
#include "includes/config.h"
#include <stdio.h>
#include <ctype.h>
#include <string.h>
#include <sys/types.h>
#include <sys/time.h>
#include <unistd.h>

int main()
{
	char readbuff[512];
	char sendbuff[255];
	fd_set inputs;
	struct timeval timeout;
	int result;
	irc = 1;	/* This is IRC */
	tcp_socket("london.uk.eu.undernet.org", 6667);
	bzero(sendbuff, sizeof(sendbuff));
        snprintf(sendbuff, sizeof(sendbuff), "USER PO POO POO :REALNAME\r\n");
        irc_sendData(sendbuff, strlen(sendbuff));
	
	bzero(sendbuff, sizeof(sendbuff));
        snprintf(sendbuff, sizeof(sendbuff), "NICK DMIRC\r\n");
        irc_sendData(sendbuff, strlen(sendbuff));

	while(1){
	        timeout.tv_sec = 1;
        	timeout.tv_usec = 0;

                FD_ZERO(&inputs);
                FD_SET(irc_sock, &inputs);
                FD_SET(0, &inputs);
		result = select(FD_SETSIZE, &inputs, NULL, NULL, &timeout);

		switch(result){
			
			case 0:
				break;
			case -1:
				perror("select");
				break;
		
			default:
				if (FD_ISSET(irc_sock, &inputs)){
					irc_readData(readbuff, sizeof(readbuff));
					if (readbuff[0] == '\0' ) exit(1);
					if ( strstr(readbuff, "throttled")){
						return 0;
					}
                                        if ( strstr(readbuff, "PING") ){
                                        int ctr = 0;
                                        char hash[64];
                                        do {
                                                hash[ctr - 6] = readbuff[ctr];
                                                ctr++;
                                        } while(readbuff[ctr] != '\r' && readbuff[ctr] != '\0');
                                                bzero(sendbuff, sizeof(sendbuff));

                                        snprintf(sendbuff, sizeof(sendbuff), "PONG :%s\r\n", hash);
                                        irc_sendData(sendbuff, sizeof(sendbuff));

                                        }
					irc_command(readbuff);
				}

				break;
		}
	}
	return 0;
}
void irc_command(char *readbuff)
{
	char host[128];
	char command[32];
	int ctr = 0;
	int varstart = 0;


	memset(host, '\0', sizeof(host));
	memset(user, '\0', sizeof(user));
	memset(command, '\0', sizeof(command));

	varstart = 0;
	ctr = 0;
	do {
		if (varstart == 2 && readbuff[ctr] != ':') command[strlen(command)] = readbuff[ctr];
		if (readbuff[ctr] == ':' ) varstart++;
		ctr++;
	} while(readbuff[ctr] != '\r' && readbuff[ctr] != '\0' && varstart <= 2);

	/* Get the user name */
	varstart = 0;
	ctr = 0;
        do {
                if (varstart == 1)user[ctr - 1] = readbuff[ctr];
                if (readbuff[ctr] == ':' || readbuff[ctr] == '!' ) varstart++;
                ctr++;
        } while(readbuff[ctr] != '\r' && readbuff[ctr] != '\0' && readbuff[ctr] != '!');

	/* Get the host data */
	varstart = 0;
	ctr = 0;
	do {
		if (varstart == 3)host[strlen(host)] = readbuff[ctr];
		if (readbuff[ctr] == ':' ) varstart++;
		ctr++;
	} while(readbuff[ctr] != '\r' && readbuff[ctr] != '\0' );
	if (!strcmp(command, "get_host")) get_host(host);
	else if (!strcmp(command, "get_netcraft")) get_netcraft(host);
	else if (!strcmp(command, "get_subdomains")) get_subdomains(host);
	else if (!strcmp(command, "get_emails")) get_emails(host);
	else if (!strcmp(command, "join")) irc_join(host);
	else if (!strcmp(command, "help")) irc_help();	
	else if (!strcmp(command, "hi")) irc_welcome();
	else if (!strcmp(command, "get_nwhois")) get_nwhois(host);
	else if (!strcmp(command, "get_iwhois")) get_iwhois(host);
	return;
}

void irc_join(char *room)
{
	char sendbuff[64];
	snprintf(sendbuff, sizeof(sendbuff), "JOIN %s\r\n", room);
	irc_sendData(sendbuff, strlen(sendbuff));
	return;
}

void irc_help()
{
	int ctr;

	for(ctr=0;ctr < 10;ctr++){
		print_line("%s", ircmessage[ctr]);
        }
	return;
}

void irc_welcome()
{
	print_line("DMitryIRC Beta (Deepmagic Information Gathering Tool\n");
	print_line("Coded By kernel-- with help from #2600uk@undernet\n");
	print_line("Engine:DMitry 1.2\n");
	print_line("For help send the command help\n");

	return;
}
