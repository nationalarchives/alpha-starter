<div id="page-header" role="banner"><a id="skip-to-main-content" href="#breadcrumb-holder">Skip to Main Content</a>
    <section class="row container">
        <article class="col starts-at-full ends-at-half clr" id="logo-holder">
            <div id="mega-menu-mobile">
                <button aria-label="Toggle menu"></button>
            </div>
            <a href="http://www.nationalarchives.gov.uk" title="Go to The National Archives homepage"> <img
                    src="http://www.nationalarchives.gov.uk/wp-content/themes/tna/images/global/logo-white.png"
                    alt="The National Archives" id="logo"/> </a>
        </article>
        <article class="col starts-at-full ends-at-half clr">
            <form action="http://www.nationalarchives.gov.uk/search/quick_search.aspx" method="get"
                  id="mobileGlobalSearch">
                <div id="mobile-search-outer-wrapper">
                    <div id="mobile-search-wrapper">
                        <input type="text" id="mobile-search-field" placeholder="Search our website..."
                               name="search_text" required aria-required="true">
                        <input type="submit" value="">
                    </div>
                    <div id="changeDestination">
                        <input checked type="radio" class="mobileSearchDestinationOption" name="searchDestination"
                               id="websiteSearch"
                               data-target="http://www.nationalarchives.gov.uk/search/quick_search.aspx"
                               data-placeholder="Search our website..." data-fieldName="search_text"/>
                        <label for="websiteSearch">Search our website</label>
                        <input type="radio" class="mobileSearchDestinationOption" name="searchDestination"
                               id="catalogueSearch"
                               data-target="http://discovery.nationalarchives.gov.uk/SearchUI/s/res"
                               data-placeholder="Search our records..." data-fieldName="_q"/>
                        <label for="catalogueSearch">Search our records</label>
                    </div>
                </div>
            </form>

            <div id="search-field-wrapper">
                <form action="http://www.nationalarchives.gov.uk/search/quick_search.aspx" method="get"
                      id="globalSearch">
                    <span id="scope-selector">&nbsp;</span>
                    <input type="text" class="search-field" placeholder="Search our website..." id="tnaSearch"
                           name="search_text" required aria-required="true">
                    <input type="submit" class="search-button" id="search-button" value="">
                </form>
                <ul id="search-options">
                    <li><a href="#" class="formDestinationChanger"
                           data-target="http://www.nationalarchives.gov.uk/search/quick_search.aspx"
                           data-placeholder="Search our website..." data-fieldName="search_text" role="button"
                           aria-label="Change form destination to search the website">Search our website</a></li>
                    <li><a href="#" class="formDestinationChanger"
                           data-target="http://discovery.nationalarchives.gov.uk/SearchUI/s/res"
                           data-placeholder="Search our records..." data-fieldName="_q" role="button"
                           aria-label="Change form destination to search the catalogue">Search our records</a></li>
                </ul>
            </div>
        </article>
    </section>
    <section class="row pull-down">
        <article class="col starts-at-full clr">
            <div id="mega-menu-pull-down">
                <button aria-label="Toggle menu">Menu</button>
            </div>
        </article>
    </section>
</div>