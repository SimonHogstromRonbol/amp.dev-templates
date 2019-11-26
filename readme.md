# These are the major html/css differences in the remake of the template.

## General
- Renamed all classes to make the html more readable.
- Drastically reduced that number of style definitions in order to make the CSS more readable.
- Drastically reduced the amount of CSS in the document while stilling keeping class names readable.

## Sidebar Toggle

- Removed the unneeded <header> element
  - this fixed a bug that would put an invisible 59px header at the top op the template preventing users from interacting with the images behind that header. 
- Did all the styling on the button itself rather than splitting it between the header and the button.
- moved the tagline into this chunk
- Gave the tagline position: fixed rather than position: absolute to not have it be overlapped by the sidebar toggle icon when scrolling vertically on the gallery-inner page, this is okay because the tagline is hidden on phones and small tablets anyway so it doesnt overlap with the text on the site.
  
## AMP Sidebar

- moved the title outside the navbar to give a clearer indication that the title isn't part of the sidebar menu, and no longer needs to be absolutely positioned outside said menu.
- went from using ".sidebar-item-icon svg *" to using ".sidebar-item-icon svg polyline" in the sidebar item icon in each item, to avoid using * selectors.

## Main Content

- Moved height and width away from each individual child and put it as a general rule, saving 2 lines of css per item on the page.

## Hero gallery

- changed the rule css selector for ".amp-carousel-slide > .i-amphtml-replaced-content" with ".amp-carousel-slide > img[class*="replaced-content"]" since the first rule would sometimes give a validation error, since you are not supposed to style on classes starting with "i-amphtml-"

## Inner blue block quote

- moved away from using html for styling but making divs as spacing, and making that effect in css instead.

## Article

- combined several div elements around the text that was used for styling.