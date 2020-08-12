/* JAVA PROGRAM TO SWAP TWO NUMBERS IN JAVA */
#include <iostream>
using namespace std;
int main()
{
	int num1,num2;
	cout<<"Enter 1st Number(A)=";
	cin>>num1;
	cout<<"Enter 2nd Number(B)=";
	cin>>num2;
	cout<<"\nNumbers Before Swapping Are:- A="<<num1<<" B="<<num2;
	//Swap logic starts here
	int temp;
	temp=num1;
	num1=num2;
	num2=temp;
	//Swap logic ends here
	cout<<"\nNumbers Before Swapping Are:- A="<<num1<<" B="<<num2;
}