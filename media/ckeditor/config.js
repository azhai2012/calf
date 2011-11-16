/*
Copyright (c) 2003-2011, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

CKEDITOR.editorConfig = function( config )
{
	// Define changes to default configuration here. For example:
	config.language = 'zh-cn';
    config.skin = 'v2';
	     // config.uiColor = '#AADC6E';

	config.toolbar =
	     [
	      ['Source', '-', 'Preview', '-'],
	      ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord'],
	      ['Undo', 'Redo', '-', 'Find', 'Replace', '-', 'SelectAll', 'RemoveFormat'],        
	      '/',
	      ['Bold', 'Italic', 'Underline'],
	      ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent'],
	      ['JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock'],
	      ['Image','Link', 'Unlink', 'Anchor'],
	      ['addpic','Flash', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 'PageBreak'],//此处的addpic为我们自定义的图标，非CKeditor提供。
	      '/',
	      ['Styles', 'Format', 'Font', 'FontSize'],
	      ['TextColor', 'BGColor'],
	    ];
	
};
