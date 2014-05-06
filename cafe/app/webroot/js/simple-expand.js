// hideMode
// -----------
// Specifies method to hide the content element.
//
// Default: fadeToggle
//
// Values:
// - fadeToggle: Use jquery.fadeToggle()
// - basic: Use jquery.toggle()
// - css: relies on user provided css to show/hide. you can defines
//   classes for "collapsed" and "expanded" classes.
//
// If un an unknown value is specified, the plug-in reverts to "css".
'hideMode': 'fadeToggle',

// searchMode
// -----------
// Specifies the defaut value for  data-expander-target-search
// when none is specified on the expander element.
//
// Default: parent
//
// Values:
// - parent: go up the expander's parents hierarchy searching 
//           each parent's childens looking for a target
//
// - absolute : finds a target globally in the document (useful when 
//              matching an id)
//
// - relative : finds a target nested inside the expander
//
// If un an unknown value is specified, no targets will be found.
'defaultSearchMode': 'parent',

// defaultTarget
// -----------
// Specifies the defaut value for data-expander-target when
// none is specified on the expander element. This is a regular 
// jQuery expander. You can use anything that jQuery likes.
//
// Default: .content
'defaultTarget': '.content',

// throwOnMissingTarget
// -----------
// Specifies whether the plug-in throws an exception if it
// cannot find a target for the expander 
//
// Default: true
'throwOnMissingTarget': true,

// keepStateInCookie
// -----------
// Specifies whether the plug-in keeps the expended/collapsed state 
// in a cookie for the next time.
//
// Default: false
//
// Notes:
// - This only works for expanders with an Id attribute.
// - Make sure you load the jQuery cookie plug-in (https://github.com/carhartl/jquery-cookie/)
//   before simple-expand is loaded.
//     
'keepStateInCookie': false,
'cookieName': 'simple-expand'