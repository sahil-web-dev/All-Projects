/* CPP PROGRAM TO SWAP TWO NUMBERS WITHOUT USING 3RD VARIABLE */
#include<iostream>
using namespace std;
class swapWithoutThird
{
	public: 
	void swapByAddSub(int n1, int n2)
	{
		n1=n1+n2;
		n2=n1-n2;
		n1=n1-n2;
		cout<<"\n\nThis Swapping Is Done By Addition & Subtraction";
		cout<<" A="<<n1<<" B="<<n2<<"\n";
	}
	public:
	void swapByMulDiv(int n1,int n2)
	{
		n1=n1*n2;
		n2=n1/n2;
		n1=n1/n2;
		cout<<"\n\nThis Swapping Is Done By Multiplication & Division";
		cout<<" A="<<n1<<" B="<<n2<<"\n";
	}
};
int main()
{
	int n1,n2;
	cout<<"Enter 1st Number (A)=";
	cin>>n1;
	cout<<"Enter 2nd Number (B)=";
	cin>>n2;
	swapWithoutThird s;
	s.swapByAddSub(n1,n2);
	s.swapByMulDiv(n1,n2);
}