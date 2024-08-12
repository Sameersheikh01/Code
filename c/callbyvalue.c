#include<stdio.h>
void swap(intx,inty)
{
	int temp;
	temp=x;
	x=y;
	y=temp;
}

int main()
{
	int x=10;
	int y=11;
	printf("values before swap:x=%d,y=%d\n",x,y);
	swap(x,y);
	printf("values after swap:x=%d,y=%d",x,y);
	return 0;
}

