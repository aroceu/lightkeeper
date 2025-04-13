# Lightkeeper

 Theme for Berelyse.org, a WordPress theme for a narrative web project told through prose and some mixed media.

 ## How to Install

This theme is best installed via the WordPress plugin "Deployer for Git."

To install:
1. WordPress Dashboard &gt; Plugins &gt; Add New Plugin
2. Search for "Deployer for Git," then Install.
3. Activate plugin.
4. Dashboard &gt; Deployer for Git (in the sidebar)
5. Add Theme
6. Use the URL for this very page as the URL for the Github repository.
7. To update the theme after new updates have been committed, come back to the Deployer for Git dashboard and click "Update Theme" under the respective theme.

 # Theme Setup

 The theme requires the site to be set up properly from the backend in order for things to appear properly.

 ## Menus

 *The theme must be installed before setting up the menu.*

 1. Navigate to your WordPress Dashboard &gt; Appearance &gt; Menus.
 2. Set up the menu from the suggested links. 
 3. I would recommend no more than a maximum of 7 top level links. External links and submenus are supported as well.
 4. Make sure the Archive/Exhibit is linked to as a Page, and that the News posts are linked to as a Category.
 5. Name the menu anything.
 6. Under "Menu Settings", next to "Display Location," select "Primary Menu."
 7. Save Menu. 

 ## Widgets

*The theme must be installed before setting up the widgets.*

1. Navigate to your WordPress Dashboard &gt; Appearance &gt; Widgets.
2. The three sidebars that populate on the page are in order from left to right, as in the topmost sidebar is the first/far left block in the footer, and the bottom/last sidebar is the last/far right block in the footer.
3. The second sidebar is stylized to be slightly smaller, as it is expected to have a list of major site links.
4. Get the widgets set up, and then select "Update." If one sidebar does not populate with content, it will appear empty on the page; the other elements will not automatically expand and align.

 ## Page Templates

 *Templates will not show up without the theme being installed first.*

 ### Front Page
 1. Click to edit the page you want to be the front page.
 2. In the page metadata (far right sidebar), click on the link beside where it says "Template" (should say "Default Template").
 3. In the dropdown, select "Front Page". 
 4. Save.
 5. Go back to your WordPress Dashboard &gt; Settings &gt; Reading.
 6. Reading Settings &gt; Your homepage displays &gt; "A static page" &gt; Select the corresponding page (the one that was just assigned the template).
 7. Save.

 ### Archive Page
 1. Click to edit the page you want to be the archive page.
 2. On the page text, anything added into the body content will appear the search form on the template.
 3. To set up the template, in the page metadata (far right sidebar), click on the link beside where it says "Template" (should say "Default Template").
 4. In the dropdown, select "Exhibition Page, aka archive masterlist".
5. Save.

 ## Categories

 This theme needs parent/child categories to be set up in a specific way with its slugs. Additionally, in functions.php and exhibit.php, the code is unique to the site's category IDs.

 The required categories and their hierarchy are as follows. Note that the name of the category can be anything - this is only for the slug.

 - news
 - archives (recommended)
    - launch
    - i
    - ii
    - iii
    - iv
    - v
    - vi

Posts should be only in one category. Posts within the "archives" child categories - i.e. chapters - can have the child category selected without selecting the parent category ("archives").

If a post is not put into a category properly, it will not break the theme, but it will make things look weird on some pages.

 ## Entry Types

 *The theme must be installed before setting up entry types.*

 This is a custom taxonomy for the purposes of this project. This taxonomy indicates how a post ought to be interpreted within the world of the story's exposition, based on its format. They show up as part of the organization of the exhibit/archives template page.

 These can be customized in the following steps
 1. Go to your WordPress Dashboard &gt; Posts &gt; Entry Types
 2. Add and edit accordingly.
 3. Entry Type names are recommended not to exceed 15 characters.

 ## Plugins

 **Recommended Plugins:**
 - "No Category Base (WPML)" by Marios Alexandrou: https://wordpress.org/plugins/no-category-base-wpml/

 ## Site Settings

 The theme pulls in from the following standard settings (Dashboard &gt; Settings):
- Site Title, as the name of the website in the header on most front matter pages, as well as in the window title
- Site Icon, as the icon of the website in the website title and WordPress admin side
- Site Address URL, as the link to direct to the front index of the site
- Date Format, for News posts

**Writing Settings**
- Default Post Category: News (recommended)

**Reading Settings**
- Your homepage displays: Selected homepage with Front Page template (required)
- Blog Posts show at most [] posts
    - This setting will also configure the number of posts that appear in the chapter categories, search results, and filter results (e.g. by chapter category, character/tag, or entry type)

**Permalink Settings**
- Permalink structure &gt; Custom Structure &gt; "/%category%/%post_id%/"

 # Additional Notes

 - The number of posts per page for search, filter, and category results can be toggled from WordPress Dashboard &gt; Settings &gt; Reading &gt; Blog pages show at most [] posts.
 - New users can be added to write off on News posts only. (They will not show up on chapter entries/posts.)
 - The last line for any post categorized as "News" will automatically format to be right-aligned with a custom font as an automatic signature.
 - Chronology:
    - The news category page displays all posts categorized as "News" from newest to oldest. 
    - The chapter category pages display all posts categorized in the respective chapter from oldest to newest.
    - The archive page displays the list of posts from oldest to newest.

## Character Signatures

Some characters have customized signatures for their associated font. The code must be added to the post as HTML, by either:

- Switch to Code Editor, OR
- In the respective block, with the formatting menu that appears, click on the three vertical dots &gt; Edit as HTML

Characters with signatures and their associated codes are:
- Nico (Loved by the King)
    <pre>&lt;span class="nico-signature"&gt;Nico&lt;/span&gt;</pre>
- Spica (Homemade Apple)
    <pre>&lt;span class="spica-signature"&gt;Spica&lt;/span&gt;</pre>
- Fir (Mrs Saint Delafield)
    <pre>&lt;span class="fir-signature"&gt;Fir&lt;/span&gt;</pre>
- Amherst/other signatures (Passions Conflict)
    <pre>&lt;span class="default-signature"&gt;Amherst/name&lt;/span&gt;</pre>

The code will automatically pull from a font and appropriate font size, but will not automatically align the text. The text can be aligned through any WordPress text editor.

When editing posts that contain this formatting, the code may not be evident at first since WordPress likes to default in showing the rich text/block editor. However, if you switch back to HTML (with the Code Editor or the "Edit as HTML" block option), the code should still exist.

