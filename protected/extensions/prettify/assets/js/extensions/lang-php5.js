--- prettify.js.orig	Fri Aug 31 03:21:54 2007
+++ prettify.js	Sun Jan 13 19:21:25 2008
@@ -68,10 +68,13 @@
   var RUBY_KEYWORDS = "then end begin rescue ensure module when undef next " +
     "redo retry alias defined";
   var SH_KEYWORDS = "done fi";
+  var PHP_KEYWORDS = "array clone declare die elseif empty enddeclare " +
+    "endfor endforeach endif endswitch endwhile eval exit extract include " +
+    "include_once isset list require_once unset";
 
   var KEYWORDS = [CPP_KEYWORDS, CSHARP_KEYWORDS, JAVA_KEYWORDS,
                   JSCRIPT_KEYWORDS, PERL_KEYWORDS, PYTHON_KEYWORDS,
-                  RUBY_KEYWORDS, SH_KEYWORDS];
+                  RUBY_KEYWORDS, SH_KEYWORDS, PHP_KEYWORDS];
   for (var k = 0; k < KEYWORDS.length; k++) {
     var kw = KEYWORDS[k].split(' ');
     for (var i = 0; i < kw.length; i++) {
