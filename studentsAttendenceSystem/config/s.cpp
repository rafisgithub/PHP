/**
 * Title		:	Attendance Management System using C file Handling and pointers
 * Author		:	Rafi Ahmed
 * Date			:	06-10-20203
 * Version		:	2.0
 * Availability	:	https://github.com/rafisgithub
#include<stdio.h> 						//using also to remove files
#include<string.h> 					 	//using to compare strings and concating
#include<time.h>  						//using to generate time
#include<conio.h>						//using to make the screen hold
#include<dirent.h>  					//using for directory
#define esc 27   
#define EOL '\n'

int main()
{
	int x=00,y=00;   					//initializing variables for counter
	char id_ag[]="14FCCOAG";			//faculties id
	char id_jks[]="14FCCOJKS";
	char id_mrk[]="14FCCOMRK";
	char id_sa[]="14FCCOSA";
	char id_tk[]="14FCCOTK";			
	
	char pw_ag[]="ag";					//faculties pass
	char pw_jks[]="jks";
	char pw_mrk[]="mrk";
	char pw_sa[]="sa";
	char pw_tk[]="tk";
	
	char subjcode1[]="CLS301";			//subject code
	char subjcode2[]="CLS302";
	char subjcode3[]="CLS303";
	char subjcode4[]="CLS304";
	char subjcode5[]="CLS305";
	
	char subjc1[100];					//taking subject code from user

	char temp_id[9];					//accepting id and pass from users
	char temp_pw[10];
	
	char chx;
	x1:printf("Enter  Your Credentials\n");
	printf("Login ID =>");
	scanf("%s",temp_id);
	printf("Password =>");
	scanf("%s",temp_pw);
	
	char ch,ch2,ch3,ch4,ch5,ch6,ch7,ch8,l1;				//assigning the character value to these variables that getch() is returning
	
	FILE *fp2;											//Creating a file structure pointer
	
	int a=(strcmp(id_ag,temp_id));						//Comparing two strings id
	if(a==0)											//if returning true
	{
		
		int p1=(strcmp(pw_ag,temp_pw));					//comparing two strings password
		if(p1==0)										//if returning true
		{
			printf("\nWelcome Apeksha Madem!!!\n");
			label2:printf("\nPress q to search for records\nPress n to create new record\nPress z to delete any records\nPress x to Logout\n");
			label1:ch2=getch();
			if (ch2=='q')					//if user enters q i.e. for reading
			do{	
			{
				
				DIR *d;
				struct dirent *dir;
				d=opendir("..//DSUMini/Faculty/Apeksha/");		//opening directory of speicified path
				if(d)
				{
					printf("\nTotal records In ur Database are as follows\n");
					while((dir=readdir(d))!=NULL)
					{
						printf("%s\n", dir->d_name);			//displaying each files present in that directory
					}
					closedir(d);	
				}
				char filename[50];
				char c1[]="..//DSUMini/Faculty/Apeksha/";				//path of the faculty database
				
				printf("\nEnter the date and time in the following format DD-MM-YYYY-HH-AM/PM\nExample: 21-08-2017-08-AM To open any specific records\n");
				
				scanf("%s",filename);									//time and date
				strcat(c1,filename);									//concat path and time and date and storing in c1
				char c2[]=".txt";
				strcat(c1,c2);											//concat c1 with .txt and storing in c1
				
				fp2=fopen(c1,"r");										//opening file in read mode
				
					if(fp2==NULL)
					{
					printf("\nNo such records found plz try again\npress b to go back or any key to contiue\n");	//if no records found
					ch7=getch();
					if(ch7=='b')
					{
						goto label2;									//when pressed b going back to main menu
					}
					}
				
				else
				{
					ch2=fgetc(fp2);										//when file found and reading full files
					while(ch2!=EOF)
					{
									putchar(ch2);						//same as printf function
							ch2=fgetc(fp2);
							
							
					}
					fclose(fp2);
					label3:printf("\nPress b to go back to main menu or press e to Logout\n");
				ch3=getch();
				if(ch3=='b')
				{
					goto label2;			//going back to main menu when pressed b
				}
				else if(ch3=='e')
				{
					goto x1;				//if pressed e then logout going back to login credential phase
				}
				else
				{
					printf("\nPlease select only above mentioned option\n");
					goto label3;				//if any unwanted key pressed again repeating procedure from asking user to press b or e
				}
					
				}
				
			}
		}while(fp2==NULL);
			else if(ch2=='n')
			{
			//if user is creating a new record
			label81:printf("\nEnter the COURSECODE (ALL In Caps)\n");
			scanf("%s",subjc1);			//accepting coursecode
			
			int c=(strcmp(subjcode1,subjc1));		//comparing user course code with valid course code
			if(c==0)								//if returns true
			{
			time_t raw;
			labelitr:time(&raw);
			
			struct tm *time_ptr;
			time_ptr=localtime(&raw);				//declaring and using structure of time
			
			char date[50];	
			strftime(date,50,"%d-%m-%Y-%I-%M-%S-%p",time_ptr);		//formatting the time and storing in an array with cuurent date,month,year,hour(24 hour format),minutes,seconds,am/pm
			char date11[50];
			strftime(date11,50,"%d-%m-%Y-%I-%p",time_ptr);			//formatting the time and storing in an array with cuurent date,month,year,hour(24 hour format),am/pm
			char date1[50];
			strftime(date1,50,"%d-%m-%Y",time_ptr);					//formatting the time and storing in an array with cuurent date,month,year
			char time1[50];
			strftime(time1,50,"%I:%M:%p",time_ptr);					//formatting the time and storing in an array with cuurent hour(24 hour format),minutes,seconds,am/pm
			char d1[]="..//DSUMini/Faculty/Apeksha/temp";			//path of temporary directory
			char c1[]="..//DSUMini/Faculty/Apeksha/temp/";			//path of temporary directory to access that file
			char c11[]="..//DSUMini/Faculty/Apeksha/";				//path of database
			strcat(c1,date);										//concatinating temporary dir path with the first strftime
			strcat(c11,date11);										//concat permanent database path with 2nd strftime
			//puts(c1);
			char c2[]=".txt";										
			char c22[]=".txt";										
			strcat(c1,c2);
			strcat(c11,c22);										//concat with the above mentioned path with .txt to get complete .txt file
			//puts(c1);
						
			char p;
			char present[]="\tPresent";							
			char absent[]="\tAbsent";								//declaring string with empty array for present and absent
			
			
			FILE *fp1;
			fp1=fopen("..//DSUMini/Stud_Db.txt","r");				//creating a file ptr and opening the specified path file in read mode
			
			
			mkdir(d1);												//making a temp directory
			
			FILE *fp;
			fp=fopen(c1,"a+");									//making a file ptr and opening a temp file with read and append mode
			ch=fgetc(fp1);
			
			
			fprintf(fp,"Subject-Name=DLDA\t\tCOURSECODE=%s\tSubject-Incharge=Apeksha\n",subjc1);
			
			printf("\nPress p for present and a for absent\n");
			while(ch!=EOF)
			{
					if(ch==EOL)
					do
					{
					p=getch();
					}while(p!='p'&&p!='a');
					
					
					if(p=='p')
					{
					while(ch!=EOF)
					{
						if(ch==EOL)
						x++;
						if(ch==EOL)
						fprintf(fp,"\t\t%s",present);
						if(ch==EOL)
						printf(present);
						break;
					}
					}
					else if(p=='a')
					{
					while(ch!=EOF)
					{
						if(ch==EOL)
						y++;
						if(ch==EOL)
						fprintf(fp,"\t\t%s",absent);
						if(ch==EOL)
						printf(absent);
						break;
					}
					}
					fputc(ch, fp);
					
						putchar(ch);
					ch = fgetc(fp1);		
					
			}
			
			printf("\nTotal number of student Present\t%d\ton %s at %s",x,date1,time1);
			printf("\nTotal number of student Absent \t%d\ton %s at %s",y,date1,time1);
			fprintf(fp,"\nTotal number of student Present\t%d\ton %s at %s",x,date1,time1);
			fprintf(fp,"\nTotal number of student Absent \t%d\ton %s at %s",y,date1,time1);

			x=00,y=00;
			fclose(fp);
			fclose(fp1);
			labelitrl1:printf("\nPress y to commit or n to update the record\n");
			l1=getch();
			if(l1=='y')
			{
			fp=fopen(c1,"r");
			FILE *fp5;
			fp5=fopen(c11,"w");
			ch=fgetc(fp);
			while(ch!=EOF)
			{
				fputc(ch,fp5);
				ch=fgetc(fp);
			}
			fclose(fp);
			fclose(fp5);
			remove(c1);
			}
			else if(l1=='n')
			{
				remove(c1);
				goto labelitr;
			}
			else
			{
				printf("\nPlease select only above mentioned option\n");
					goto labelitrl1;
			}
				rmdir(d1);
				label4:printf("\nPress b to go back to main menu or press e to Logout\n");
				ch4=getch();
				if(ch4=='b')
				{
					goto label2;
				}
				else if(ch4=='e')
				{
					goto x1;
				}
				else
				{
					printf("\nPlease select only above mentioned option\n");
					goto label4;
				}
			}
			else
			{
				printf("Invalid Subject Code , plz enter subject code in caps\n or it may be possible the subject is taken by other faculty\nTry Again");
				goto label81;
			}
			
		}
			else if(ch2=='z')
			{
			
				do{	
				DIR *d;
				struct dirent *dir;
				d=opendir("..//DSUMini/Faculty/Apeksha/");
				if(d)
				{
					printf("\nTotal records are in ur database\n");
					while((dir=readdir(d))!=NULL)
					{
						printf("%s\n", dir->d_name);
					}
					closedir(d);
					
				}
				char filename[50];
				int f;
				char c1[]="..//DSUMini/Faculty/Apeksha/";
				printf("\nEnter the date and time in the following format DD-MM-YYYY-HH-AM/PM\nExample: 21-08-2017-08-AM To delete any specific records\n");
				scanf("%s",filename);
				strcat(c1,filename);
				char c2[]=".txt";
				strcat(c1,c2);
				strcat(filename,c2);
				FILE *fp2;
				fp2=fopen(c1,"r");
				
				if(fp2==NULL)
				{
					printf("\nNo such records found plz try again\npress b to go back or any key to contiue\n");
					ch6=getch();
					if(ch6=='b')
					{
						goto label2;
					}
				}
			fclose(fp2);
			
			if(fp2!=NULL)
			{
			printf("Are You Sure You really want to delete %s \nRecord/File From the database",filename);
				label5:printf("\nThe recovery isn't possible after deletion Press y to confirm or b to go back ");
				ch5=getch();
				if(ch5=='y')
				{
				f=remove(c1);
				
				if(f==0)
				{
					printf("\n%s Record/File deted successfully\npress b to go back or press any key to continue",filename);
					ch8=getch();
					if(ch8=='b')
					{
						goto label2;
					}
				}
				else
				{
					printf("Unable to delete file");
					perror("Error");
				}	
					
					
				
				}
		
			
			else
			{
				if(ch5=='b')
				{
					goto label2;
				}
				else
				{
					printf("\nPlease select only above mentioned option\n");
					goto label5;
				}
				
				
			}
			}
				
			}while(fp2!=NULL);
			}
		
			else if(ch2=='x')
			{
				goto x1;
			}
			
			else
			{
				printf("\nPlease select only the above option mentioned\n");
				goto label1;
			}
			
		}
		
		else 
		{
			printf("\nInvalid Password\nPress Escape to exit\nPress any key to try again\n");
			chx=getch();
			if(chx==esc)
			{
				return 0;
			}
			else
			{
				goto x1;
			}
		}
	}
	else
	{
		char ch,ch2;
		int b=(strcmp(id_sa,temp_id));
		if(b==0)
		{
			int p2=(strcmp(pw_sa,temp_pw));	
			if(p2==0)
			{
				printf("Welcome Shahid Sir!!!\n");
				
			label12:printf("\nPress q to search for records\nPress n to create new record\nPress z to delete any records\nPress x to Logout\n");
			label11:ch2=getch();
			if (ch2=='q')
			do{	
			{
				
				DIR *d;
				struct dirent *dir;
				d=opendir("..//DSUMini/Faculty/Shahid/");
				if(d)
				{
					printf("\nTotal records In ur Database are as follows\n");
					while((dir=readdir(d))!=NULL)
					{
						printf("%s\n", dir->d_name);
					}
					closedir(d);	
				}
				char filename[50];
				char c1[]="..//DSUMini/Faculty/Shahid/";
				
				printf("\nEnter the date and time in the following format DD-MM-YYYY-HH-AM/PM\nExample: 21-08-2017-08-AM To open any specific records\n");
				
				scanf("%s",filename);
				strcat(c1,filename);
				char c2[]=".txt";
				strcat(c1,c2);
				
				fp2=fopen(c1,"r");
				
					if(fp2==NULL)
					{
					printf("\nNo such records found plz try again\npress b to go back or any key to contiue\n");
					ch7=getch();
					if(ch7=='b')
					{
						goto label12;
					}
					}
				
				else
				{
					ch2=fgetc(fp2);
					while(ch2!=EOF)
					{
									putchar(ch2);		
							ch2=fgetc(fp2);
							
							
					}
					fclose(fp2);
					label13:printf("\nPress b to go back to main menu or press e to Logout\n");
				ch3=getch();
				if(ch3=='b')
				{
					goto label12;
				}
				else if(ch3=='e')
				{
					goto x1;
				}
				else
				{
					printf("\nPlease select only above mentioned option\n");
					goto label13;
				}
					
				}
				
			}
		}while(fp2==NULL);
			else if(ch2=='n')
			{
				
			label82:printf("\nEnter the COURSECODE (ALL In Caps)\n");
			scanf("%s",subjc1);
			int c=(strcmp(subjcode2,subjc1));
			if(c==0)
			{
			time_t raw;
			labelitr1:time(&raw);
			
			struct tm *time_ptr;
			time_ptr=localtime(&raw);
			
			char date[50];
			strftime(date,50,"%d-%m-%Y-%I-%M-%S-%p",time_ptr);
			char date11[50];
			strftime(date11,50,"%d-%m-%Y-%I-%p",time_ptr);
			char date1[50];
			strftime(date1,50,"%d-%m-%Y",time_ptr);
			char time1[50];
			strftime(time1,50,"%I:%M:%p",time_ptr);
			char d1[]="..//DSUMini/Faculty/Shahid/temp";
			char c1[]="..//DSUMini/Faculty/Shahid/temp/";
			char c11[]="..//DSUMini/Faculty/Shahid/";
			strcat(c1,date);
			strcat(c11,date11);
			//puts(c1);
			char c2[]=".txt";
			char c22[]=".txt";
			strcat(c1,c2);
			strcat(c11,c22);
			//puts(c1);
						
			char p;
			char present[]="\tPresent";
			char absent[]="\tAbsent";
			
			
			FILE *fp1;
			fp1=fopen("..//DSUMini/Stud_Db.txt","r");
			
			
			mkdir(d1);
			
			FILE *fp;
			fp=fopen(c1,"a+");
			ch=fgetc(fp1);
			fprintf(fp,"Subject-Name=AM3\t\tCOURSECODE=%s\tSubject-Incharge=Shahid\n",subjc1);
			printf("\nPress p for present and a for absent\n");
			while(ch!=EOF)
			{
					if(ch==EOL)
					do
					{
					p=getch();
					}while(p!='p'&&p!='a');
					
					
					if(p=='p')
					{
					while(ch!=EOF)
					{
						if(ch==EOL)
						x++;
						if(ch==EOL)
						fprintf(fp,"\t\t%s",present);
						if(ch==EOL)
						printf(present);
						break;
					}
					}
					else if(p=='a')
					{
					while(ch!=EOF)
					{
						if(ch==EOL)
						y++;
						if(ch==EOL)
						fprintf(fp,"\t\t%s",absent);
						if(ch==EOL)
						printf(absent);
						break;
					}
					}
						fputc(ch, fp);
					
						putchar(ch);
					ch = fgetc(fp1);		
					
			}
			printf("\nTotal number of student Present\t%d\ton %s at %s",x,date1,time1);
			printf("\nTotal number of student Absent \t%d\ton %s at %s",y,date1,time1);
			
			fprintf(fp,"\nTotal number of student Present\t%d\ton %s at %s",x,date1,time1);
			fprintf(fp,"\nTotal number of student Absent \t%d\ton %s at %s",y,date1,time1);

			x=00,y=00;
			fclose(fp);
			fclose(fp1);
			
			labelitrl2:printf("\nPress y to commit or n to update the record\n");
			l1=getch();
			if(l1=='y')
			{
			fp=fopen(c1,"r");
			FILE *fp5;
			fp5=fopen(c11,"w");
			ch=fgetc(fp);
			while(ch!=EOF)
			{
				fputc(ch,fp5);
				ch=fgetc(fp);
			}
			fclose(fp);
			fclose(fp5);
			remove(c1);
			}
			else if(l1=='n')
			{
				remove(c1);
				goto labelitr1;
			}
			else
			{
					printf("\nPlease select only above mentioned option\n");
					goto labelitrl2;
			}
				rmdir(d1);
				
				label14:printf("\nPress b to go back to main menu or press e to Logout\n");
				ch4=getch();
				if(ch4=='b')
				{
					goto label12;
				}
				else if(ch4=='e')
				{
					goto x1;
				}
				else
				{
					printf("\nPlease select only above mentioned option\n");
					goto label14;
				}
				}
				else
				{
				printf("Invalid Subject Code , plz enter subject code in caps\n or it may be possible the subject is taken by other faculty\nTry Again");
				goto label82;
				}
			
		}
			else if(ch2=='z')
			{
			
				do{	
				DIR *d;
				struct dirent *dir;
				d=opendir("..//DSUMini/Faculty/Shahid/");
				if(d)
				{
					printf("\nTotal records are in ur database\n");
					while((dir=readdir(d))!=NULL)
					{
						printf("%s\n", dir->d_name);
					}
					closedir(d);
					
				}
				char filename[50];
				int f;
				char c1[]="..//DSUMini/Faculty/Shahid/";
				printf("\nEnter the date and time in the following format DD-MM-YYYY-HH-AM/PM\nExample: 21-08-2017-08-AM To delete any specific records\n");
				scanf("%s",filename);
				strcat(c1,filename);
				char c2[]=".txt";
				strcat(c1,c2);
				strcat(filename,c2);
				FILE *fp2;
				fp2=fopen(c1,"r");
				fclose(fp2);
				if(fp2==NULL)
				{
					printf("\nNo such records found plz try again\npress b to go back or any key to contiue\n");
					ch6=getch();
					if(ch6=='b')
					{
						goto label12;
					}
					
				}
			
			
			if(fp2!=NULL)
			{
			printf("Are You Sure You really want to delete %s \nRecord/File From the database",filename);
				label15:printf("\nThe recovery isn't possible after deletion Press y to confirm or b to go back ");
				ch5=getch();
				if(ch5=='y')
				{
				f=remove(c1);
				
				if(f==0)
				{
					printf("\n%s Record/File deted successfully\npress b to go back or press any key to continue",filename);
					ch8=getch();
					if(ch8=='b')
					{
						goto label12;
					}
				}
				else
				{
					printf("Unable to delete file");
					perror("Error");
				}	
					
					
					
				
				}
		
			
			else
			{
				if(ch5=='b')
				{
					goto label12;
				}
				else
				{
					printf("\nPlease select only above mentioned option\n");
					goto label15;
				}
				
				
			}
			}
				
			}while(fp2!=NULL);
			}
		
			else if(ch2=='x')
			{
				goto x1;
			}
			
			else
			{
				printf("\nPlease select only the above option mentioned\n");
				goto label11;
			}
			}
			else
			{
			printf("\nInvalid Password\nPress Escape to exit\nPress any key to try again\n");
			chx=getch();
			if(chx==esc)
			{
				return 0;
			}
			else
			{
				goto x1;
			}
			}
		
		}
		else
		{
			char ch,ch2;
			int c=(strcmp(id_jks,temp_id));
			if(c==0)
			{
				int p3=(strcmp(pw_jks,temp_pw));
				if(p3==0)
				{
					printf("Welcome Javed Sir!!!\n");
					label22:printf("\nPress q to search for records\nPress n to create new record\nPress z to delete any records\nPress x to logout\n");
			label21:ch2=getch();
			if (ch2=='q')
			do{	
			{
				
				DIR *d;
				struct dirent *dir;
				d=opendir("..//DSUMini/Faculty/JJaved/");
				if(d)
				{
					printf("\nTotal records In ur Database are as follows\n");
					while((dir=readdir(d))!=NULL)
					{
						printf("%s\n", dir->d_name);
					}
					closedir(d);	
				}
				char filename[50];
				char c1[]="..//DSUMini/Faculty/JJaved/";
				
				printf("\nEnter the date and time in the following format DD-MM-YYYY-HH-AM/PM\nExample: 21-08-2017-08-AM To open any specific records\n");
				
				scanf("%s",filename);
				strcat(c1,filename);
				char c2[]=".txt";
				strcat(c1,c2);
				
				fp2=fopen(c1,"r");
				
					if(fp2==NULL)
					{
					printf("\nNo such records found plz try again\npress b to go back or any key to contiue\n");
					ch7=getch();
					if(ch7=='b')
					{
						goto label22;
					}
					}
				
				else
				{
					ch2=fgetc(fp2);
					while(ch2!=EOF)
					{
									putchar(ch2);		
							ch2=fgetc(fp2);
							
							
					}
					fclose(fp2);
					label23:printf("\nPress b to go back to main menu or press e to Logout\n");
				ch3=getch();
				if(ch3=='b')
				{
					goto label22;
				}
				else if(ch3=='e')
				{
					goto x1;
				}
				else
				{
					printf("\nPlease select only above mentioned option\n");
					goto label23;
				}
					
				}
				
			}
		}while(fp2==NULL);
			else if(ch2=='n')
			{
				

			label83:printf("\nEnter the COURSECODE (ALL In Caps)\n");
			scanf("%s",subjc1);
			int c=(strcmp(subjcode3,subjc1));
			if(c==0)
			{
			time_t raw;
			labelitr2:time(&raw);
			
			struct tm *time_ptr;
			time_ptr=localtime(&raw);
			
			char date[50];
			strftime(date,50,"%d-%m-%Y-%I-%M-%S-%p",time_ptr);
			char date11[50];
			strftime(date11,50,"%d-%m-%Y-%I-%p",time_ptr);
			char date1[50];
			strftime(date1,50,"%d-%m-%Y",time_ptr);
			char time1[50];
			strftime(time1,50,"%I:%M:%p",time_ptr);
			char d1[]="..//DSUMini/Faculty/JJaved/temp";
			char c1[]="..//DSUMini/Faculty/JJaved/temp/";
			char c11[]="..//DSUMini/Faculty/JJaved/";
			strcat(c1,date);
			strcat(c11,date11);
			//puts(c1);
			char c2[]=".txt";
			char c22[]=".txt";
			strcat(c1,c2);
			strcat(c11,c22);
			//puts(c1);
						
			char p;
			char present[]="\tPresent";
			char absent[]="\tAbsent";
			
			
			FILE *fp1;
			fp1=fopen("..//DSUMini/Stud_Db.txt","r");
			
			
			mkdir(d1);
			
			FILE *fp;
			fp=fopen(c1,"a+");
			ch=fgetc(fp1);
			fprintf(fp,"Subject-Name=DIS\t\tCOURSECODE=%s\tSubject-Incharge=Javed\n",subjc1);
			printf("\nPress p for present and a for absent\n");
			while(ch!=EOF)
			{
					if(ch==EOL)
					do
					{
					p=getch();
					}while(p!='p'&&p!='a');
					
					
					if(p=='p')
					{
					while(ch!=EOF)
					{
						if(ch==EOL)
						x++;
						if(ch==EOL)
						fprintf(fp,"\t\t%s",present);
						if(ch==EOL)
						printf(present);
						break;
					}
					}
					else if(p=='a')
					{
					while(ch!=EOF)
					{
						if(ch==EOL)
						y++;
						if(ch==EOL)
						fprintf(fp,"\t\t%s",absent);
						if(ch==EOL)
						printf(absent);
						break;
					}
					}
					
					fputc(ch, fp);
						putchar(ch);
					ch = fgetc(fp1);		
					
			}
				printf("\nTotal number of student Present\t%d\ton %s at %s",x,date1,time1);
			printf("\nTotal number of student Absent \t%d\ton %s at %s",y,date1,time1);
			
			fprintf(fp,"\nTotal number of student Present\t%d\ton %s at %s",x,date1,time1);
			fprintf(fp,"\nTotal number of student Absent \t%d\ton %s at %s",y,date1,time1);

			x=00,y=00;
			fclose(fp);
			fclose(fp1);
			
			labelitrl3:printf("\nPress y to commit or n to update the record\n");
			l1=getch();
			if(l1=='y')
			{
			fp=fopen(c1,"r");
			FILE *fp5;
			fp5=fopen(c11,"w");
			ch=fgetc(fp);
			while(ch!=EOF)
			{
				fputc(ch,fp5);
				ch=fgetc(fp);
			}
			fclose(fp);
			fclose(fp5);
			remove(c1);
			}
			else if(l1=='n')
			{
				remove(c1);
				goto labelitr2;
			}
			else
			{
					printf("\nPlease select only above mentioned option\n");
					goto labelitrl3;
			}
				rmdir(d1);
			
				label24:printf("\nPress b to go back to main menu or press e to Logout\n");
				ch4=getch();
				if(ch4=='b')
				{
					goto label22;
				}
				else if(ch4=='e')
				{
					goto x1;
				}
				else
				{
					printf("\nPlease select only above mentioned option\n");
					goto label24;
				}
				}
				else
				{
				printf("Invalid Subject Code , plz enter subject code in caps\n or it may be possible the subject is taken by other faculty\nTry Again");
				goto label83;
				}
			
		}
			else if(ch2=='z')
			{
			
				do{	
				DIR *d;
				struct dirent *dir;
				d=opendir("..//DSUMini/Faculty/JJaved/");
				if(d)
				{
					printf("\nTotal records are in ur database\n");
					while((dir=readdir(d))!=NULL)
					{
						printf("%s\n", dir->d_name);
					}
					closedir(d);
					
				}
				char filename[50];
				int f;
				char c1[]="..//DSUMini/Faculty/JJaved/";
				printf("\nEnter the date and time in the following format DD-MM-YYYY-HH-AM/PM\nExample: 21-08-2017-08-AM To delete any specific records\n");
				scanf("%s",filename);
				strcat(c1,filename);
				char c2[]=".txt";
				strcat(c1,c2);
				strcat(filename,c2);
				FILE *fp2;
				fp2=fopen(c1,"r");
				fclose(fp2);
				if(fp2==NULL)
				{
					printf("\nNo such records found plz try again\npress b to go back or any key to contiue\n");
					ch6=getch();
					if(ch6=='b')
					{
						goto label22;
					}
					
				}
			
			
			if(fp2!=NULL)
			{
			printf("Are You Sure You really want to delete %s \nRecord/File From the database",filename);
				label25:printf("\nThe recovery isn't possible after deletion Press y to confirm or b to go back ");
				ch5=getch();
				if(ch5=='y')
				{
				f=remove(c1);
				
				if(f==0)
				{
					printf("\n%s Record/File deted successfully\npress b to go back or press any key to continue",filename);
					ch8=getch();
					if(ch8=='b')
					{
						goto label22;
					}
				}
				else
				{
					printf("Unable to delete file");
					perror("Error");
				}	
					
					
				
				}
		
			
			else
			{
				if(ch5=='b')
				{
					goto label22;
				}
				else
				{
					printf("\nPlease select only above mentioned option\n");
					goto label25;
				}
				
				
			}
			}
				
			}while(fp2!=NULL);
			}
		
			else if(ch2=='x')
			{
				goto x1;
			}
			
			else
			{
				printf("\nPlease select only the above option mentioned\n");
				goto label21;
			}
			
				}			
				else
				{
					printf("\nInvalid Password\nPress Escape to exit\nPress any key to try again\n");
					chx=getch();
					if(chx==esc)
					{
						return 0;
					}
					else
					{
						goto x1;
					}
				}
			}
			else
			{
				char ch,ch2;
				int d=(strcmp(id_tk,temp_id));
				if(d==0)
				{
					int p4=(strcmp(pw_tk,temp_pw));
					if(p4==0)
					{
						printf("Welcome Tabrez Sir!!!\n");
						label32:printf("\nPress q to search for records\nPress n to create new record\nPress z to delete any records\nPress x to Logout\n");
			label31:ch2=getch();
			if (ch2=='q')
			do{	
			{
				
				DIR *d;
				struct dirent *dir;
				d=opendir("..//DSUMini/Faculty/Tabrez/");
				if(d)
				{
					printf("\nTotal records In ur Database are as follows\n");
					while((dir=readdir(d))!=NULL)
					{
						printf("%s\n", dir->d_name);
					}
					closedir(d);	
				}
				char filename[50];
				char c1[]="..//DSUMini/Faculty/Tabrez/";
				
				printf("\nEnter the date and time in the following format DD-MM-YYYY-HH-AM/PM\nExample: 21-08-2017-08-AM To open any specific records\n");
				
				scanf("%s",filename);
				strcat(c1,filename);
				char c2[]=".txt";
				strcat(c1,c2);
				
				fp2=fopen(c1,"r");
				
					if(fp2==NULL)
					{
					printf("\nNo such records found plz try again\npress b to go back or any key to contiue\n");
					ch7=getch();
					if(ch7=='b')
					{
						goto label32;
					}
					}
				
				else
				{
					ch2=fgetc(fp2);
					while(ch2!=EOF)
					{
									putchar(ch2);		
							ch2=fgetc(fp2);
							
							
					}
					fclose(fp2);
					label33:printf("\nPress b to go back to main menu or press e to Logout\n");
				ch3=getch();
				if(ch3=='b')
				{
					goto label32;
				}
				else if(ch3=='e')
				{
					goto x1;
				}
				else
				{
					printf("\nPlease select only above mentioned option\n");
					goto label33;
				}
					
				}
				
			}
		}while(fp2==NULL);
			else if(ch2=='n')
			{
			label84:printf("\nEnter the COURSECODE (ALL In Caps)\n");
			scanf("%s",subjc1);
			int c=(strcmp(subjcode4,subjc1));
			if(c==0)
			{
			time_t raw;
			labelitr3:time(&raw);
			
			struct tm *time_ptr;
			time_ptr=localtime(&raw);
			
			char date[50];
			strftime(date,50,"%d-%m-%Y-%I-%M-%S-%p",time_ptr);
			char date11[50];
			strftime(date11,50,"%d-%m-%Y-%I-%p",time_ptr);
			char date1[50];
			strftime(date1,50,"%d-%m-%Y",time_ptr);
			char time1[50];
			strftime(time1,50,"%I:%M:%p",time_ptr);
			char d1[]="..//DSUMini/Faculty/Tabrez/temp";
			char c1[]="..//DSUMini/Faculty/Tabrez/temp/";
			char c11[]="..//DSUMini/Faculty/Tabrez/";
			strcat(c1,date);
			strcat(c11,date11);
			//puts(c1);
			char c2[]=".txt";
			char c22[]=".txt";
			strcat(c1,c2);
			strcat(c11,c22);
			//puts(c1);
						
			char p;
			char present[]="\tPresent";
			char absent[]="\tAbsent";
			
			
			FILE *fp1;
			fp1=fopen("..//DSUMini/Stud_Db.txt","r");
			
			
			mkdir(d1);
			
			FILE *fp;
			fp=fopen(c1,"a+");
			ch=fgetc(fp1);
			fprintf(fp,"Subject-Name=DS\t\tCOURSECODE=%s\tSubject-Incharge=Tabrez\n",subjc1);
			printf("\nPress p for present and a for absent\n");
			while(ch!=EOF)
			{
					if(ch==EOL)
					do
					{
					p=getch();
					}while(p!='p'&&p!='a');
					
					
					if(p=='p')
					{
					while(ch!=EOF)
					{
						if(ch==EOL)
						x++;
						if(ch==EOL)
						fprintf(fp,"\t\t%s",present);
						if(ch==EOL)
						printf(present);
						break;
					}
					}
					else if(p=='a')
					{
					while(ch!=EOF)
					{
						if(ch==EOL)
						y++;
						if(ch==EOL)
						fprintf(fp,"\t\t%s",absent);
						if(ch==EOL)
						printf(absent);
						break;
					}
					}
					
					fputc(ch, fp);
						putchar(ch);
					ch = fgetc(fp1);		
					
			}
				printf("\nTotal number of student Present\t%d\ton %s at %s",x,date1,time1);
			printf("\nTotal number of student Absent \t%d\ton %s at %s",y,date1,time1);
			

			fprintf(fp,"\nTotal number of student Present\t%d\ton %s at %s",x,date1,time1);
			fprintf(fp,"\nTotal number of student Absent \t%d\ton %s at %s",y,date1,time1);
			
			x=00,y=00;
			fclose(fp);
			fclose(fp1);
			
			labelitrl4:printf("\nPress y to commit or n to update the record\n");
			l1=getch();
			if(l1=='y')
			{
			fp=fopen(c1,"r");
			FILE *fp5;
			fp5=fopen(c11,"w");
			ch=fgetc(fp);
			while(ch!=EOF)
			{
				fputc(ch,fp5);
				ch=fgetc(fp);
			}
			fclose(fp);
			fclose(fp5);
			remove(c1);
			}
			else if(l1=='n')
			{
				remove(c1);
				goto labelitr3;
			}
			else
			{
					printf("\nPlease select only above mentioned option\n");
					goto labelitrl4;
			}
				rmdir(d1);
			
				label34:printf("\nPress b to go back to main menu or press e to Logout\n");
				ch4=getch();
				if(ch4=='b')
				{
					goto label32;
				}
				else if(ch4=='e')
				{
					goto x1;
				}
				else
				{
					printf("\nPlease select only above mentioned option\n");
					goto label34;
				}
				}
				else
				{
				printf("Invalid Subject Code , plz enter subject code in caps\n or it may be possible the subject is taken by other faculty\nTry Again");
				goto label84;
				}
			
		}
			else if(ch2=='z')
			{
			
				do{	
				DIR *d;
				struct dirent *dir;
				d=opendir("..//DSUMini/Faculty/Tabrez/");
				if(d)
				{
					printf("\nTotal records are in ur database\n");
					while((dir=readdir(d))!=NULL)
					{
						printf("%s\n", dir->d_name);
					}
					closedir(d);
					
				}
				char filename[50];
				int f;
				char c1[]="..//DSUMini/Faculty/Tabrez/";
				printf("\nEnter the date and time in the following format DD-MM-YYYY-HH-AM/PM\nExample: 21-08-2017-08-AM To delete any specific records\n");
				scanf("%s",filename);
				strcat(c1,filename);
				char c2[]=".txt";
				strcat(c1,c2);
				strcat(filename,c2);
				FILE *fp2;
				fp2=fopen(c1,"r");
				fclose(fp2);
				if(fp2==NULL)
				{
					printf("\nNo such records found plz try again\npress b to go back or any key to contiue\n");
					ch6=getch();
					if(ch6=='b')
					{
						goto label32;
					}
					
				}
			
			
			if(fp2!=NULL)
			{
			printf("Are You Sure You really want to delete %s \nRecord/File From the database",filename);
				label35:printf("\nThe recovery isn't possible after deletion Press y to confirm or b to go back ");
				ch5=getch();
				if(ch5=='y')
				{
				f=remove(c1);
				
				if(f==0)
				{
					printf("\n%s Record/File deted successfully\npress b to go back or press any key to continue",filename);
					ch8=getch();
					if(ch8=='b')
					{
						goto label32;
					}
				}
				else
				{
					printf("Unable to delete file");
					perror("Error");
				}	
					
					
				
				}
		
			
			else
			{
				if(ch5=='b')
				{
					goto label32;
				}
				else
				{
					printf("\nPlease select only above mentioned option\n");
					goto label35;
				}
				
				
			}
			}
				
			}while(fp2!=NULL);
			}
		
			else if(ch2=='x')
			{
				goto x1;
			}
			
			else
			{
				printf("\nPlease select only the above option mentioned\n");
				goto label31;
			}
			
					}
					else
					{
						printf("\nInvalid Password\nPress Escape to exit\nPress any key to try again\n");
						chx=getch();
						if(chx==esc)
						{
							return 0;
						}
						else
						{
							goto x1;
						}
					}
				}
				else
				{
					char ch,ch2;
					int e=(strcmp(id_mrk,temp_id));
					if(e==0)
					{
						int p5=(strcmp(pw_mrk,temp_pw));
						if(p5==0)
						{
							printf("Welcome Mubashir Sir!!!\n");
						label42:printf("\nPress q to search for records\nPress n to create new record\nPress z to delete any records\nPress x to Logout\n");
			label41:ch2=getch();
			if (ch2=='q')
			do{	
			{
				
				DIR *d;
				struct dirent *dir;
				d=opendir("..//DSUMini/Faculty/Mubashir/");
				if(d)
				{
					printf("\nTotal records In ur Database are as follows\n");
					while((dir=readdir(d))!=NULL)
					{
						printf("%s\n", dir->d_name);
					}
					closedir(d);	
				}
				char filename[50];
				char c1[]="..//DSUMini/Faculty/Mubashir/";
				
				printf("\nEnter the date and time in the following format DD-MM-YYYY-HH-AM/PM\nExample: 21-08-2017-08-AM To open any specific records\n");
				
				scanf("%s",filename);
				strcat(c1,filename);
				char c2[]=".txt";
				strcat(c1,c2);
				
				fp2=fopen(c1,"r");
				
					if(fp2==NULL)
					{
					printf("\nNo such records found plz try again\npress b to go back or any key to contiue\n");
					ch7=getch();
					if(ch7=='b')
					{
						goto label42;
					}
					}
				
				else
				{
					ch2=fgetc(fp2);
					while(ch2!=EOF)
					{
									putchar(ch2);		
							ch2=fgetc(fp2);
							
							
					}
					fclose(fp2);
					label43:printf("\nPress b to go back to main menu or press e to Logout\n");
				ch3=getch();
				if(ch3=='b')
				{
					goto label42;
				}
				else if(ch3=='e')
				{
					goto x1;
				}
				else
				{
					printf("\nPlease select only above mentioned option\n");
					goto label43;
				}
					
				}
				
			}
		}while(fp2==NULL);
			else if(ch2=='n')
			{
			label85:printf("\nEnter the COURSECODE (ALL In Caps)\n");
			scanf("%s",subjc1);
			int c=(strcmp(subjcode5,subjc1));
			if(c==0)
			{
			time_t raw;
			labelitr4:time(&raw);
			
			struct tm *time_ptr;
			time_ptr=localtime(&raw);
			
			char date[50];
			strftime(date,50,"%d-%m-%Y-%I-%M-%S-%p",time_ptr);
			char date11[50];
			strftime(date11,50,"%d-%m-%Y-%I-%p",time_ptr);
			char date1[50];
			strftime(date1,50,"%d-%m-%Y",time_ptr);
			char time1[50];
			strftime(time1,50,"%I:%M:%p",time_ptr);
			char d1[]="..//DSUMini/Faculty/Mubashir/temp";
			char c1[]="..//DSUMini/Faculty/Mubashir/temp/";
			char c11[]="..//DSUMini/Faculty/Mubashir/";
			strcat(c1,date);
			strcat(c11,date11);
			//puts(c1);
			char c2[]=".txt";
			char c22[]=".txt";
			strcat(c1,c2);
			strcat(c11,c22);
			//puts(c1);
						
			char p;
			char present[]="\tPresent";
			char absent[]="\tAbsent";
			
			
			FILE *fp1;
			fp1=fopen("..//DSUMini/Stud_Db.txt","r");
			
			
			mkdir(d1);
			
			FILE *fp;
			fp=fopen(c1,"a+");
			ch=fgetc(fp1);
			fprintf(fp,"Subject-Name=ECCF\t\tCOURSECODE=%s\tSubject-Incharge=Mubashir\n",subjc1);
			printf("\nPress p for present and a for absent\n");
			while(ch!=EOF)
			{
					if(ch==EOL)
					do
					{
					p=getch();
					}while(p!='p'&&p!='a');
					
					
					if(p=='p')
					{
					while(ch!=EOF)
					{
						if(ch==EOL)
						x++;
						if(ch==EOL)
						fprintf(fp,"\t\t%s",present);
						if(ch==EOL)
						printf(present);
						break;
					}
					}
					else if(p=='a')
					{
					while(ch!=EOF)
					{
						if(ch==EOL)
						y++;
						if(ch==EOL)
						fprintf(fp,"\t\t%s",absent);
						if(ch==EOL)
						printf(absent);
						break;
					}
					}
					
					fputc(ch, fp);
						putchar(ch);
					ch = fgetc(fp1);		
					
			}
			printf("\nTotal number of student Present\t%d\ton %s at %s",x,date1,time1);
			printf("\nTotal number of student Absent \t%d\ton %s at %s",y,date1,time1);
			
			fprintf(fp,"\nTotal number of student Present\t%d\ton %s at %s",x,date1,time1);
			fprintf(fp,"\nTotal number of student Absent \t%d\ton %s at %s",y,date1,time1);
			
			x=00,y=00;
			fclose(fp);
			fclose(fp1);
			
			labelitrl5:printf("\nPress y to commit or n to update the record\n");
			l1=getch();
			if(l1=='y')
			{
			fp=fopen(c1,"r");
			FILE *fp5;
			fp5=fopen(c11,"w");
			ch=fgetc(fp);
			while(ch!=EOF)
			{
				fputc(ch,fp5);
				ch=fgetc(fp);
			}
			fclose(fp);
			fclose(fp5);
			remove(c1);
			}
			else if(l1=='n')
			{
				remove(c1);
				goto labelitr4;
			}
			else
			{
					printf("\nPlease select only above mentioned option\n");
					goto labelitrl5;
			}
				rmdir(d1);
			
				label44:printf("\nPress b to go back to main menu or press e to Logout\n");
				ch4=getch();
				if(ch4=='b')
				{
					goto label42;
				}
				else if(ch4=='e')
				{
					goto x1;
				}
				else
				{
					printf("\nPlease select only above mentioned option\n");
					goto label44;
				}
				}
				else
				{
				printf("Invalid Subject Code , plz enter subject code in caps\n or it may be possible the subject is taken by other faculty\nTry Again");
				goto label85;
				}
			
		}
			else if(ch2=='z')
			{
			
				do{	
				DIR *d;
				struct dirent *dir;
				d=opendir("..//DSUMini/Faculty/Mubashir/");
				if(d)
				{
					printf("\nTotal records are in ur database\n");
					while((dir=readdir(d))!=NULL)
					{
						printf("%s\n", dir->d_name);
					}
					closedir(d);
					
				}
				char filename[50];
				int f;
				char c1[]="..//DSUMini/Faculty/Mubashir/";
				printf("\nEnter the date and time in the following format DD-MM-YYYY-HH-AM/PM\nExample: 21-08-2017-08-AM To delete any specific records\n");
				scanf("%s",filename);
				strcat(c1,filename);
				char c2[]=".txt";
				strcat(c1,c2);
				strcat(filename,c2);
				FILE *fp2;
				fp2=fopen(c1,"r");
				fclose(fp2);
				if(fp2==NULL)
				{
					printf("\nNo such records found plz try again\npress b to go back or any key to contiue\n");
					ch6=getch();
					if(ch6=='b')
					{
						goto label42;
					}
					
				}
			
			
			if(fp2!=NULL)
			{
			printf("Are You Sure You really want to delete %s \nRecord/File From the database",filename);
				label45:printf("\nThe recovery isn't possible after deletion Press y to confirm or b to go back ");
				ch5=getch();
				if(ch5=='y')
				{
				f=remove(c1);
				
				if(f==0)
				{
					printf("\n%s Record/File deted successfully\npress b to go back or press any key to continue",filename);
					ch8=getch();
					if(ch8=='b')
					{
						goto label42;
					}
				}
				else
				{
					printf("Unable to delete file");
					perror("Error");
				}	
					
					
				
				}
		
			
			else
			{
				if(ch5=='b')
				{
					goto label42;
				}
				else
				{
					printf("\nPlease select only above mentioned option\n");
					goto label45;
				}
				
				
			}
			}
				
			}while(fp2!=NULL);
			}
		
			else if(ch2=='x')
			{
				goto x1;
			}
			
			else
			{
				printf("\nPlease select only the above option mentioned\n");
				goto label41;
			}
			
						}
						else
						{
							printf("\nInvalid Password\nPress Escape to exit\nPress any key to try again\n");
							chx=getch();
							if(chx==esc)
							{
								return 0;
							}
							else
							{
								goto x1;
							}
						}
					}
					else
					{
						printf("\nInvalid Login Details\nPress Escape to exit\nPress any key to try again\n");
						chx=getch();
						if(chx==esc)
						{
							return 0;
						}
						else
						{
							goto x1;
						}
					}
				}
			}
		}
	}
}