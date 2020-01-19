#!C:\xampp2\perl\bin\perl.exe
# The above line is perl execution path in xampp
# The below line tells the browser, that this script will send html content.
# If you miss this line then it will show "malformed header from script" error.
print "Content-type: text/html\n\n";
print "\nHello world.";
$age = 25;             # An integer assignment
$name = "John Paul";   # A string
$salary = 1445.50;     # A floating point
print "<br /> <span style='color:red'> Age = $age </span>\n";
print "<br /> Name = $name\n";
print "Salary = $salary\n";
