/* JAVA PROGRAM TO SWAP TWO NUMBERS WITHOUT USING 3RD VARIABLE */
import java.util.*;
public class swapWithoutThird
{
	public void swapByaddsub(int n1,int n2)
	{
		n1=n1+n2;   //n1=4,n2=5; n1=4+5=9
		n2=n1-n2;	//n2=9-5; n2=4
		n1=n1-n2;	//n1=9-4; n1=5
		System.out.println("\n\nThis Swapping Is Done By Addition & Subtraction");
		System.out.println("A="+n1+" B= "+n2);
	}
	public void swapByMulDiv(int n1,int n2)
	{
		n1=n1*n2;	//n1=4,n2=5; n1=20
		n2=n1/n2;	//n2=20/5; n2=4
		n1=n1/n2;	//n1=20/4; n1=5
		System.out.println("\n\nThis Swapping Is Done By Multiplication & Division");
		System.out.println("A="+n1+" B= "+n2);
	}
	public static void main(String[] args)
	{
		swapWithoutThird s=new swapWithoutThird();
		Scanner sc=new Scanner(System.in);
		System.out.print("Enter 1st Number (A)=");
		int n1=sc.nextInt();
		System.out.print("Enter 2nd Number (B)=");
		int n2=sc.nextInt();
		System.out.println("Before Swapping Values are A="+n1+" B="+n2);
		s.swapByaddsub(n1,n2);
		s.swapByMulDiv(n1,n2);
	}
}