# Valentino InvoicePlane customizations

All the customizations in the code are wrapped between `custom-valentino-start` and `custom-valentino-end comments`.

1. Once downloaded the new IP version, create a new branch and apply the new features/bugfixes or what else.
2. Completely delete the old `vendor` folder and replace it with the new one provided by the new IP version.
3. Add this customizations to mPDF:
    * Copy all files from `/custom/mpdf/ttfonts` to `/vendor/mpdf/mpdf/ttfonts`.
    * Add Source Sans Pro font in `$fontdata` array inside the file `/vendor/mpdf/mpdf/src/Config/FontVariables.php` (as reported in the file `/custom/mpdf/src/Config/FontVariables.php`).
4. Test a lot the new version and correct bugs, if there are.
5. Make a diff between the new custom version and the new IP version, if there are temp files that have not to be uploaded in the new release, delete them (usually found in the following folders `/application/logs`, `/uploads/archive` and `/vendor/mpdf/mpdf/tmp/ttfontdata`).
6. Delete all `.DS_Store` files from the new custom version.
7. Make a zip of the new custom version without these files and folders in the root: `.htaccess`, `ipconfig.php`, `.git`.
8. Release the new version and apply it in the production environment.
