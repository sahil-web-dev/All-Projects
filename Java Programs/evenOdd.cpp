/* CPP PROGRAM TO CHECK WHETHER NUMBER IS EVEN OR ODD */
#include<iostream>
using namespace std;
void check(int n)
{
	if(n%2==0)
	{
		cout<<"Number "<<n<<" Is Even";
	}
	else
	{
		cout<<"Number "<<n<<" Is Odd";
	}
}
int main()
{
	int n;
	cout<<"Enter Number=";
	cin>>n;
	check(n);
}