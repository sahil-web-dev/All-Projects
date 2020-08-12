/* JAVA PROGRAM TO FIND SUM OF 1 TO N NUMBERS */
import java.util.*;
public class sumOfN
{
	public int sum(int n)
	{
		int sum=0;
		for(int i=1;i<=n;i++)
		{
			sum=sum+i;
		}
		return sum;
	}
	public static void main(String[] args)
	 {
	 	sumOfN s=new sumOfN();
		int n;
		Scanner sc=new Scanner(System.in);
		System.out.println("Enter Number Upto Which You Want Sum= ");
		n=sc.nextInt();
		int result=s.sum(n);
		System.out.println("Sum of "+n+" numbers is= "+result);
	}
}