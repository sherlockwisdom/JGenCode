package formParser;

import java.io.IOException;

public class Main {
	
	//private static String htmlFile = "/home/maestro/Desktop/index.php";
	private static String inputFile = new String();
	private static String outputFile = new String();

	public static void main(String[] args) throws IOException {
		for(int i=0;i<args.length; ++i) {
			if(args[i].equals("-f")) {
				inputFile = args[i+1];
			} else if(args[i].equals("-o")) {
				outputFile = args[i+1];
			}
		}
		
		if(outputFile.isEmpty()) outputFile = inputFile + ".gcd";
		
		GenCode genCode = new GenCode(inputFile);
		genCode.writeFile(outputFile);
		genCode.editHTML();
	}

}
