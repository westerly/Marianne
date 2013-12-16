var getElementsByAttribute = function (attr, value) {
	  var match = [];
	 
	  /* Get the droids we're looking for*/
	  var elements = document.getElementsByTagName("*");
	 
	  /* Loop through all elements */
	  for (var ii = 0, ln = elements.length; ii < ln; ii++) {
	 
	    if (elements[ii].hasAttribute(attr)) {
	 
	      /* If a value was passed, make sure it matches the element's */
	      if (value) {
	 
	        if (elements[ii].getAttribute(attr) === value) {
	          match.push(elements[ii]);
	        }
	      } else {
	        /* Else, simply push it */
	        match.push(elements[ii]);
	      }
	    }
	  }
	  return match;
};