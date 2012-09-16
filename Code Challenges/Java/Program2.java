
public class Program2 {
	
	public static void permute(String s) {
		permute("", s);
	}
	
	public static void permute(String prefix, String remain) {
		System.out.println(prefix);
		for (int i = 0; i < remain.length(); i ++) {
			//System.out.println(remain.charAt(i) + " : " + remain.substring(0, i)+remain.substring(i+1));
			
			permute(prefix + remain.charAt(i), remain.substring(0, i)+remain.substring(i+1));
		}
	}

	public static void main(String[] args) {
		String s = "abc";
		permute(s);
	}
}
