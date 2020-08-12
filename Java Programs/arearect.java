/* JAVA PROGRAM TO CALCULATE AREA OF RECTANGLE */
import java.util.*;
public class arearect
{
	public static void main(String[] args) 
	{
		Scanner sc=new Scanner(System.in);
		float length,breadth,area;
		System.out.println("Enter Length Of Rectanle in CM=");
		length=sc.nextFloat();
		System.out.println("Enter breadth Of Rectanle in CM=");
		breadth=sc.nextFloat();
		area=length*breadth;
		System.out.println("Area Of Rectanle is= "+area+" sq.cm");	
	}
}