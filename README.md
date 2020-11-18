CONTENTS OF THIS FILE
---------------------

 * Introduction
 * Requirements
 * How to use
 * Conflicts/Known issues


INTRODUCTION
------------

This module provides simple popup block like that of sumo.me.
Sometimes we need to display popup blocks which interacts with the user.
Example, Get a Quote, Newsletter subscription forms. Using this module,
the user can and their webforms to a block which is a popup and style it as well.

After this, the user can specify when to display the popup to the user.
Example, 5 seconds after the user is on the page, when the user scrolls to 50% of page and so on.

The user can also add custom styles to the block.


REQUIREMENTS
------------
Webform module. Currently, only webforms can be embedded in the popup blocks.
After creating the webform, you will have to select the webform from the block configuration page.

`IMPORTANT: Make sure you add category "dopup" to your webform, otherwise it won't show up in teh block config form.`


CONFLICTS/KNOWN ISSUES
----------------------
Theoretically, you can add multiple blocks to the same page, but I haven't
tested this feature. For now, stick to one popup per page.
