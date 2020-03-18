# Change Autofocus Field @ WooCommerce Checkout

If you decide to delete or reorder checkout fields, you probably also need to change the checkout field with “autofocus”. In plain English, this is the checkout field where the keyboard cursor goes automatically to on checkout page load (by default, this is the Billing First Name).

As usual, changing this default behavior is very easy, even if you’re not familiar with PHP. In the example below, I’m removing the autofocus from Billing First Name and assigning it to the Billing Email field instead.

Copy the snippet, test it on your development environment and only then push it to your live website. Enjoy!

<img src="https://businessbloomer.com/wp-content/uploads/2018/05/woocommerce-change-autofocus-field-checkout.png">

# Where to add this snippet?
You can place PHP snippets at the bottom of your child theme functions.php file (before "?>" if you have it). CSS, on the other hand, goes in your child theme style.css file. Make sure you know what you are doing when editing such files 

