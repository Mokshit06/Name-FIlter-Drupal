# Name-Filter-drupal
This is a Drupal module that enables a filter which replaces "[name:FIRSTNAME:LASTNAME]" to "Name: LASTNAME FIRSTNAME". It uses Filter API to do so.

## Steps
1. Download or clone this Github repository and extract it.
2. Move the folder to the modules folder in your directory of Drupal.
3. Go to the Extend page of your Drupal website or paste _admin/modules_ infornt of the url or path of your Drupal website.
4. Go to _admin/config/content/formats_ in your Drupal website and select the text format for which you would like to apply the filter for.
5. Here under __Enabled filters__, enable your filter.

Now whenever you enter the token "[name:LASTNAME:FIRSTNAME]" in your Drupal website, it will be replaced with "Name: LASTNAME FIRSTNAME".
