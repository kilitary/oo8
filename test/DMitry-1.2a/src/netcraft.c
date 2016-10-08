#include "includes/netcraft.h"

int format_c(char *host)
{
        ctr = 0;
        do {
        ch = recvbuff[ctr];
        if ( ch != '\n' ) temp[strlen(temp)] = ch;
        if ( ch == '\n' ) {
		if ( strstr(temp, "bgcolor=\"#bac0ff\"> \t<td>") && ! check ){
			/* This set gathers the Operating System */
			ctr2 = 30;
			tmp = 30;
			bzero(write_l, sizeof(write_l));
                        do {
                        ch = temp[ctr2];
			if ( temp[ctr2] != '>' && temp[ctr2] != '<' && temp[ctr2 + 1] != '>' && temp[ctr2 - 1] != '<' && temp[ctr2 -1] != '\\' && temp[ctr2 + 2] != '>' && temp[ctr2] != '\t'){
                                write_l[ctr2 - tmp] = ch;
                        }
                        else tmp++;

                        ctr2++;

                        } while (ch != '\n' && ch != '\0' && ch != '<');

                        print_line("Operating System: %s\n", write_l);

			/* This set gathers the WebServer Version */
			bzero(write_l, sizeof(write_l));
			ctr2 += 10;
                        tmp = ctr2;
                        do {
                        ch = temp[ctr2];
			if ( temp[ctr2] != '>' && temp[ctr2] != '<' && temp[ctr2 + 1] != '>' && temp[ctr2 - 1] != '<' && temp[ctr2 -1] != '\\' && temp[ctr2 + 2] != '>' && temp[ctr2] != '\t'){
                                write_l[ctr2 - tmp] = ch;
                        }
                        else tmp++;

                        ctr2++;

                        } while (ch != '\n' && ch != '\0' && ch != '<');

                        print_line("WebServer: %s\n", write_l);

                        tmp = 0;
			check = 1;
		}
		if ( temp[4] == '<' && temp[5] == 't' && temp[6] == 'd' && temp[7] == '>' ){
			tmp++;
			if ( tmp == 1 ){
				print_line("Uptime Information:\n\n");
			}
			bzero(os, sizeof(os));
			ctr3 = 10;
			do {
			if ( temp[ctr3] != '<' ) os[ctr3 - 10] = temp[ctr3];
			ctr3++;
			} while ( temp[ctr3] != '<' && temp[ctr3] != '\0' );
			print_line("%s\n", os);
			os[strlen(os)] = '\n';
		}
		if ( temp[4] == '<' && temp[5] == 't' && temp[6] == 'd' && temp[21] == '>' ){
			bzero(uptime, sizeof(uptime));
			ctr3 = 22;
			do {
			ch = temp[ctr3];
			if ( ch != '\0' && ch != '<') uptime[ctr3-22] = ch;
			ctr3++;
			} while ( ch != '\0' && ch != '<' );
			if ( temp[strlen(temp) - 2] == 45 ) strcat(uptime, " - \tMax (days)\n");
			if ( temp[strlen(temp) - 2] == 'd') strcat(uptime, " - \tLatest (days)\n");
			if ( temp[strlen(temp) - 1] == ' ' ) strcat(uptime, "\t - \tNo. Samples\n");
			print_line("%s", uptime);
			ch = 1;
		}
		if ( temp[0] == 'N' && temp[1] == 'o' && temp[31] == 'u' && temp[32] == 'p' ) {
			print_line("No uptime reports available for host: %s\n", host);
		}
                bzero(temp, sizeof(temp));
        }
        if ( ch == '\0' ) {
                if ( recvbuff[ctr - 1] == '\n' ) bzero(temp, sizeof(temp));
                return 0;
        }
        ctr++;
        } while ( ch != '\0' );
        return 0;
}

int get_netcraft(char *host)
{
	if ( strlen(outputfile) ) file_open();
	snprintf(temp, sizeof(temp), "Gathered Netcraft information for %s\n---------------------------------\n", host);
	print_line("\n%s\n", temp);

	check = 0;

	print_line("Retrieving Netcraft.com information for %s\n", host);
	tcp_socket("uptime.netcraft.com", 80);

	bzero(temp, sizeof(temp));

	snprintf(sendbuff, sizeof(sendbuff), "GET http://uptime.netcraft.com/up/graph?site=%s HTTP/1.0\r\n\r\n", host);
	sendData(sendbuff, strlen(sendbuff));

	while(1){
		bzero(recvbuff, sizeof(recvbuff));

		readData(recvbuff, sizeof(recvbuff));
		format_c(host);
			
		if ( recvbuff[0] == '\0' ){
			print_line("Netcraft.com Information gathered\n");
			close(tcp_sock);
			tcp_sock = 0;
			if ( strlen(outputfile) ) file_close();
			return 0;
		}
	}
}
