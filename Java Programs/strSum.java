/*PROGRAM TO CALCULATE SUM OF 2 STRINGS IN JAVA */
import java.util.*;
public class strSum{
	public static void main(String[] args) {
		String s1="111";
		String s2="222";
		int sum=Integer.parseInt(s1)+Integer.parseInt(s2);
		String s3=Integer.toString(sum);
		System.out.println("\n"+sum+" this is by using INTEGER variable \n");
		System.out.println("\n"+s3+" this is by using STRING variable \n");
	}
}