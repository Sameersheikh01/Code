#include<stdio.h>
int main()
{
	int age;
	
	printf("\nEnter the Age:");
	scanf("%d",&age);
	
	if(age>=18)
	{
		printf("\nyou are Allowed for Driving");
	}
	else
	{
		printf("\nyou are not Allowed for Driving");
	}
	return 0; 
}

