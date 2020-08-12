/* C++ PROGRAM TO FIND SUM OF 1 TO N NUMBERS */
#include<iostream>
using namespace std;
int main()
{
	int n,sum=0;
	cout<<"Enter Number Upto Which You Want To Calculate Sum= ";
	cin>>n;
	for(int i=1;i<=n;i++)
	{
		sum=sum+i;
	}
	cout<<"Sum of "<<n<<" Numbers Is= "<<sum;
}