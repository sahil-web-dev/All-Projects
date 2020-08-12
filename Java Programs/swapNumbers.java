/* JAVA PROGRAM TO SWAP TWO NUMBERS IN JAVA */
import java.util.*;
public class swapNumbers
{
	public static void main(String[] args)
	{
		int num1,num2;
		Scanner s=new Scanner(System.in);
		System.out.println("Enter 1st Number(A)=");
		num1=s.nextInt();
		System.out.println("Enter 2nd Number(B)=");
		num2=s.nextInt();
		System.out.println("\nNumbers Before Swapping Are:-\n A= "+num1+" B="+num2);
		int temp;
		//swap logic starts here
		temp=num1;
		num1=num2;
		num2=temp;
		//swap logic ends here
		System.out.println("\nNumbers After Swapping Are:-\n A= "+num1+" B="+num2);
	}
}