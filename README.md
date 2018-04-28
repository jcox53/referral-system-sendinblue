# referral-system-sendinblue

PLEASE NOTE: This is a clone of the code from Clément Galopin's SendinBlue referral system repository (https://github.com/clementgalopin/sendinblue-referral-system) with all of the variable names, comments, error messages, placeholder text, and notifications translated into English.

/*    START README FROM ORIGINAL REPOSITORY    */

Building a user referral system with Sendinblue

This project is a user referral system based on Sendinblue (https://fr.sendinblue.com/) and its v3 API (https://github.com/sendinblue/APIv3-php-library/).

You will find a form in index.php in which you can submit the email address of the person you want to invite.

You need to submit the referral email address in the page URL (index.php?referrer=EMAIL_ADDRESS).

The form is then submitted to backend.php which interacts with Sendinblue's API and updates the customers' list.
