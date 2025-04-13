# lightkeeper

 Theme for Berelyse.org, a WordPress theme for a narrative web project told through prose and some mixed media.

 ## How to Install

### Manual Installation (FTP/cPanel)
 1. On this page, click Code &gt; Download ZIP
 2. Extract the ZIP
 3. Log into your FTP/cPanel
 4. Navigate to your public_html  &gt; WordPress folder  &gt; wp-content  &gt; themes
 5. Drop or upload the folder into the themes folder
 6. Go to your WordPress Dashboard in your web browser &gt; Themes
 7. Activate the theme ("Lightkeeper")
 8. This process will need to be repeated from steps 1-7 in order to pull updates and bug fixes in the theme.

 ### Manual Installation (FTP/cPanel)
 1. On this page, click Code &gt; Download ZIP
 2. Extract the ZIP
 3. Log into your FTP/cPanel
 4. Navigate to your public_html  &gt; WordPress folder  &gt; wp-content  &gt; themes
 5. Drop or upload the folder into the themes folder
 6. Go to your WordPress Dashboard in your web browser &gt; Themes
 7. Activate the theme ("Lightkeeper")
 8. This process will need to be repeated from steps 1-7 in order to pull updates and bug fixes in the theme.

### cPanel Installation (Github Version control)
1. Navigate to your site's cpanel (domain.com/cpanel)
2. Files &gt; Git Version Control. You can also search for Git Version Control.
3. Click "Create" (Create Repository)
    i. Keep "Clone a Repository" toggled to be enabled.
    ii. Skip Clone URL for now
    iii. Repository Path: Enter the path of your WordPress themes, which, within your WordPress directory, should be /wp-content/themes/
    iv. Repository Name: Can be whatever you want, as it is only for what it will be named inside Git Version Control. I'd suggest keeping "lightkeeper" anyway, for intuitive reasoning purposes.
4. Navigate back to this Github page with the theme.
5. Code &gt; Copy the HTTPS URL.
6. Paste into the Clone URL field.
7. Create. The theme is now uploaded into your website's file directory.
8. Go to your WordPress Dashboard in your web browser &gt; Themes
9. Activate the theme ("Lightkeeper")
10. To update the theme: Git Version Control &gt; Manage (next to how the repository was named during setup) &gt; Pull or Deploy &gt; Update from Remote
11. Do not edit any of the WordPress theme files directly (through the WP Theme Editor or in the theme directory) if uploading through Git Version Control, the version mismatches will break the theme and it will have to be re-installed.

### WordPress Plugin Installation

TBD

 ## Theme Setup

 The theme requires the site to be setup properly from the backend in order for things to appear properly.

 ### Menus

 *The theme must be installed before setting up the menu.*

 1. Navigate to your WordPress Dashboard &gt; Appearance &gt; Menus.
 2. Set up the menu from the suggested links. 
 3. I would recommend no more than a maximum of 7 top level links. External links and submenus are supported as well.
 4. Make sure the Archive/Exhibit is linked to as a Page, and that the News posts are linked to as a Category.
 5. Name the menu anything.
 6. Under "Menu Settings", next to "Display Location," select "Primary Menu."
 7. Save Menu. 

 ### Widgets

*The theme must be installed before setting up the widgets.*

1. Navigate to your WordPress Dashboard &gt; Appearance &gt; Widgets.
2. The three sidebars that populate on the page are in order from left to right, as in the topmost sidebar is the first/far left block in the footer, and the bottom/last sidebar is the last/far right block in the footer.
3. The second sidebar is stylized to be slightly smaller, as it is expected to have a list of major site links.
4. Get the widgets set up, and then select "Update." If one sidebar does not populate with content, it will appear empty on the page; the other elements will not automatically expand and align.

 ### Page Templates

 #### Front Page
 1. Click to edit the page you want to be the front page.
 2. In the page metadata (far right sidebar), click on the link beside where it says "Template" (should say "Default Template").
 3. In the dropdown, select "Front Page." 
 4. Save.
 5. Go back to your WordPress Dashboard &gt; Settings &gt; Reading.
 6. Reading Settings &gt; Your homepage displays &gt; "A static page" &gt; Select the corresponding page (the one that was just assigned the template).
 7. Save.

 ### Categories

 This theme needs parent/child categories to be set up in a specific way with its slugs. Additionally, in functions.php and exhibit.php, the code is unique to the site's category IDs.

 The required categories and their hierarchy are as follows. Note that the name of the category can be anything - this is only for the slug.

 - news
 - archives (this is not required, but recommended)
    - launch
    - i
    - ii
    - iii
    - iv
    - v
    - vi

Posts should be only in one category. Posts within the "archives" child categories can have the child category selected without selecting the parent category ("archives").

If a post is not put into a category properly, it will not break the theme, but it will make things look weird on some pages.

 ### Entry Types

 *The theme must be installed before setting up entry types.*

 This is a custom taxonomy for the purposes of this project. This taxonomy indicates how a post ought to be interpreted within the world of the story's exposition, based on its format. They show up as part of the organization of the exhibit/archives template page.

 These can be customized in the following steps
 1. Go to your WordPress Dashboard &gt; Posts &gt; Entry Types
 2. Add and edit accordingly.
 3. Entry Type names are recommended not to exceed 15 characters.

 ### Plugins

 Recommended Plugins:
 - "No Category Base (WPML)" by Marios Alexandrou: https://wordpress.org/plugins/no-category-base-wpml/

 To install a plugin:
 1. Go to your WordPress Dashboard &gt; Plugins &gt; Add New Plugin

 ### Site Settings

 ### Additional Notes

 - The number of posts per page for search, filter, and category results can be toggled from WordPress Dashboard &gt; Settings &gt; Reading &gt; Blog pages show at most [] posts.