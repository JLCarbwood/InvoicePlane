# Valentino InvoicePlane customizations

All the customizations in the code are wrapped between `custom-valentino-start` and `custom-valentino-end comments.

1. Once downloaded the new IP version, create a new branch and apply the new features/bugfixes or what else.
2. Completely delete the old `vendor` folder and replace it with the new one provided by the new IP version.
3. Add this customizations to mPDF:
  * Copy all files from `/custom/mpdf/ttfonts` to `/vendor/mpdf/mpdf/ttfonts`.
  * Add Source Sans Pro font in `$fontdata` array inside the file `/vendor/mpdf/mpdf/src/Config/FontVariables.php` (as reported in the file /custom/mpdf/src/Config/FontVariables.php).
4. Test a lot the new version and correct bugs, if there are.
5. Make a diff between the new custom version and the new IP version, if there are temp files that have not to be uploaded in the new release, delete them.
6. Temporary move out from the folder (the new custom version) the `.htaccess` and the `ipconfig.php` files and make a zip of the folder.
7. Release the new version and apply it in the production environment.
