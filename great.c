#include<stdio.h>
void main()
{
int a,b,c;
printf("enter the values=");
scanf("%d%d%d",&a,&b,&c);
if(a>b&&a>c)
{
printf("the greatest number is a");
}
else if(b>c)
{
printf("the greatest number is b");
}
else
{
printf("the greatest number is c");
}
}
