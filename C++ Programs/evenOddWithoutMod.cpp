/* CPP PROGRAM TO CHECK WHETHER THE NUMBER IS EVEN OR ODD WITHOUT USING MOD% OPERATOR */
#include<iostream>
using namespace std;
int main()
{
	int num;
	cout<<"Enter Number=";
	cin>>num;
	if((num/2)*2==num)
	{
		cout<<"\n\n"<<num<<" Is An Even Number";
	}
	else
	{
		cout<<"\n\n"<<num<<" Is An Odd Number";
	}
	return 0;
}