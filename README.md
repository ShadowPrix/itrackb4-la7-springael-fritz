# ITRACKB4 LA7 - Movies

Prepared by: Fritz C. Springael

## Q1:
What does a browser do when you refresh? What does GET put in the URL, and is repeating it safe?

[Answer - NIf the form used GET, the values would show up in the URL. A browser's refresh just repeats the last request, so a GET that saves a movie would save it again every time the page is refreshed or revisited. POST avoids this because the browser warns before resending, and the values aren't in the URL.]


## Q2:
What does validate() do the moment a rule fails, and where does the visitor land? (Slide 17 says it in one sentence.)

[Answer - What stops the save is validate(). When a rule fails, Laravel stops the method right there, so the line that calls saveMovies() never runs. The visitor is sent back to /movies/create, with the 5 and 6. the errors and the old input (what they typed) stored in the session.]

## Q3:
How long does with() keep a message? Both "the layout runs everywhere" and "the message shows once" can be true. Say what makes the second one true.

[Answer - The layout does check for the message on every page, but the message only exists for one request. ->with('success') stores it for the very next request, which is the movie list after the redirect. On any later page the @if runs but finds nothing in the session, so nothing shows.]