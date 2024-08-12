#include<stdio.h>
int main()
{
	int year;
	
	printf("\nEnter the year:");
	scanf("%d",&year);
	
	if(year%4==0)
	{
		printf("\nLeap year");
	}
	else
	{
		printf("\nNot Leap year ");
	}
	
	return 0; 
}

