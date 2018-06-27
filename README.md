# EmailOpt for Laravel 4.2

Created by Ian Cowan for the vZTL ARTCC website in order to comply with the new GDPR requirements.

# To Install:
  1. Move all migrations into the migrations folder.
  2. Move the controller into the controllers folder.
  3. Move the view into the views folder.
  4. Move the models to the models folder.
  5. Run "php artisan migrate" in order to add the appropiate tables/columns.
  6. In the User model, add "opt" to the fillable.
  
# Setup/Configuration:
  - The link "/emails/opt" will now return the page to opt in and accept the privacy policy OR to opt out (if one has already opted in).
  - There will be a new column within the roster table (User model) to see who has opted in. 1 = Opted in, 0 = Not Opted in.
  
If you have any questions or issues, contact me at wm@ztlartcc.org.
