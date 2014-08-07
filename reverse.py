#!/usr/bin/python
import sys
import getopt


def reverse(word):
	"""
	Prints out the provided word in reverse.
	Example: If provided word = 'fragile', this method should print: 
		
		original: fragile
		reversed: eligarf

	"""

	print "original: %s" % word
	   
        # Break string into array.
        my_list = list(word)
        # Initiate reversed list of letters
        reversed_list = []
        # Get length of word
        length = len(my_list);
        # Append list in reverse order
        for x in range(length):
            reversed_list.append(my_list[length-x-1])
        # Put array back into string
        reversed_word = ''.join(reversed_list)


       # Code form original solution
       # # Break string into pieces
       #  my_list = list(word)
       #  # Reverse order of new list
       #  reversed_list = my_list[::-1]
       #  # Rejoin list into string
       #  new_word = ''.join(reversed_list)
	
	print "reversed: %s" % reversed_word



def main():

    # parse command line options
    try:
        opts, args = getopt.getopt(sys.argv[1:], "h", ["help"])
    except getopt.error, msg:
        print msg
        print "for help use --help"
        sys.exit(2)
    # process options
    for o, a in opts:
        if o in ("-h", "--help"):
            print __doc__
            sys.exit(0)
    # process arguments
    for arg in args:
    	reverse(arg)
    	print '-------------------'

if __name__ == "__main__":
    main()