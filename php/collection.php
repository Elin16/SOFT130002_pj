<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>My Collections</title>
    <link type="text/css" rel="stylesheet" href="../cssstyle/css/global.css">
    <link type="text/css" rel="stylesheet" href="../cssstyle/collection.css">
    <script>
        function deleteCol(blockid) {
            var x = document.getElementById(blockid);
            if (x != null) console.log("sss"); else console.log("ddd");
            x.innerHTML = "";
        }
    </script>
</head>
<body id="allcontent">
<div id="footprints" class="button"></div>
<header id="top">
    <div id="sign">
        <span id="logo">Art Store</span>
        <span id="slogan">Where you find <em>genius</em> and <em>extroordinary</em> </span>
    </div>
    <nav>
        <button><a href="../htmls/homepage.html" class="button" id="home">home</a></button>
        <button><a href="search.html" class="button" id="search">search</a></button>
        <form>
            <input type="text" placeholder="Search in my collections">
            <button type="submit">search</button>
        </form>
    </nav>
</header>
<main id="main">
    <div id="slidebar">
        <div>Account : Lexit ;</div>
        <div>Email : 2147483647@software.edu ;</div>
        <div>Area : Foodute ; </div>
        <div>Collections : 7 ;</div>

    </div>
    <div id="blocks_col">
        <div id="subtitle">My collections</div>
        <div class="block" id="col1">
            <div class="figure">
                <img src="../resources/img/59.jpg" width="280" height="320" alt="The painting named Luncheon Boating Party">
            </div>
            <div class="figcap intro">
                <p class="title">Portrait of Dr. Gachet</p>
                <p class="artist"><a class="athbut" href="search.html"> Vincent Van Gogh</a></p>
                <p class="style">Post-Impressionism</p>
                <p class="descreption">
                    <em>Portrait of Dr. Gachet</em> is one of the most revered paintings by Dutch artist Vincent van Gogh. It depicts Dr. Paul Gachet,
                    who took care of him during the final months of his life. It was the only portrait painted by van Gogh during his stay at the doctor's
                    home in Auvers-sur-Oise (27.2 km outside Paris), a 70 day period from May to July 1890. In 1990,
                    it fetched a then-record price of $82.5 million ($75 million, plus a 10 percent buyer's commission) when
                    sold at auction in New York.
                </p>
                <button type="button" class="deleteBut" onclick="deleteCol('col1');">delete</button>
            </div>
        </div>
        <div class="block" id="col2">
            <div class="figure">
                <img src="../resources/img/424.jpg" width="280" height="320" alt="The painting named Luncheon Boating Party">
            </div>
            <div class="figcap intro">
                <p class="title">The Milkmaid</p>
                <p class="artist"><a class="athbut" href="search.html"> Jan Vermeer </a></p>
                <p class="style">Baroquem</p>
                <p class="descreption">
                    <em>The Milkmaid</em> is an oil-on-canvas painting of a"milkmaid", in fact a domestic kitchen maid, by the Dutch artist Johannes Vermeer.
                    It is now in the Rijksmuseum in Amsterdam, Netherlands, which regards it as"unquestionably one of the museum's finest attractions".
                    The painting is strikingly illusionistic, conveying not just details but a sense of the weight of the woman and the table."The light,
                    though bright, doesn't wash out the rough texture of the bread crusts or flatten the volumes of the maid's thick waist and rounded shoulders",
                    wrote Karen Rosenberg, an art critic for The New York Times. Yet with half of the woman's face in shadow,
                    it is "impossible to tell whether her downcast eyes and pursed lips express wistfulness or concentration," she wrote.
                </p>
                <button type="button" class="deleteBut" onclick="deleteCol('col2');">delete</button>
            </div>
        </div>

        <div class="block" id="col3">
            <div class="figure">
                <img src="../resources/img/426.jpg" width="280" height="320" alt="The painting named Luncheon Boating Party">
            </div>
            <div class="figcap intro">
                <p class="title">The Art of Painting</p>
                <p class="artist"><a class="athbut" href="search.html"> Jan Vermeer</a></p>
                <p class="style">Baroque</p>
                <p class="descreption">
                    <em>The Art of Painting</em> is a famous 17th century oil on canvas painting by Dutch painter, Johannes Vermeer. Many art historians believe that it is an allegory of painting, hence the alternative title of the painting. After Vermeer's The Procuress it is the largest work by the master. Its composition and iconography also make it the most complex Vermeer work of all.</p>
                <button type="button" class="deleteBut"onclick="deleteCol('col3');">delete</button>
            </div>
        </div>
        <div class="block" id="col4">
            <div class="figure">
                <img src="../resources/img/60.jpg" width="280" height="320" alt="The painting named Luncheon Boating Party">
            </div>
            <div class="figcap intro">
                <p class="title">Sunflowersh</p>
                <p class="artist"><a class="athbut" href="search.html"> Vincent Van Gogh</a></p>
                <p class="style">Post-Impressionism</p>
                <p class="descreption">
                    <em>Sunflowers</em> (original title, in French: Tournesols) are the subject of two series of still life paintings by the Dutch painter Vincent van Gogh. The earlier series executed in Paris in 1887 gives the flowers lying on the ground, while the second set executed a year later in Arles shows bouquets of sunflowers in a vase. In the artist 's mind both sets were linked by the name of his friend Paul Gauguin, who acquired two of the Paris versions. About eight months later Van Gogh hoped to welcome and to impress Gauguin again with Sunflowers, now part of the painted décoration he prepared for the guestroom of his Yellow House where Gauguin was supposed to stay in Arles. After Gauguin 's departure, Van Gogh imagined the two major versions as wings of the Berceuse Triptych, and finally he included them in his exhibit at Les XX in Bruxelles.
                </p>
                <button type="button" class="deleteBut"onclick="deleteCol('col4');">delete</button>
            </div>
        </div>
        <div class="block" id="col5">
            <div class="figure">
                <img src="../resources/img/62.jpg" width="280" height="320" alt="The painting named Luncheon Boating Party">
            </div>
            <div class="figcap intro">
                <p class="title">Sidewalk Café at Night</p>
                <p class="artist"><a class="athbut" href="search.html"> Vincent Van Gogh</a></p>
                <p class="style">Post-Impressionism</p>
                <p class="descreption">
                    <em>Café Terrace at Night</em>, also known as The Cafe Terrace on the Place du Forum, is an coloured oil painting on an industrially primed canvas of size 25 (Toile de 25 figure) in Arles, France, mid September 1888. The painting is not signed, but described and mentioned by the artist in his letters on various occasions—and, as well, there is a large pen drawing of the composition which originates from the artist’s estate.
                </p>
                <button type="button" class="deleteBut"onclick="deleteCol('col5');">delete</button>
            </div>
        </div>
        <div class="block" id="col6">
            <div class="figure">
                <img src="../resources/img/42.jpg" width="280" height="320" alt="The painting named Luncheon Boating Party">
            </div>
            <div class="figcap intro">
                <p class="title">Glass of Absinthe</p>
                <p class="artist"><a class="athbut" href="search.html"> Edgar Degas</a></p>
                <p class="style">Post-Impressionism</p>
                <p class="descreption">
                    <em>L'Absinthe</em> (English: The Absinthe Drinker or Glass of Absinthe) is a painting by Edgar Degas. Some original title translations are A sketch of a French Café, then Figures at Café, the title was finally changed in 1893 to L’Absinthe (the name the piece is known by today). It is now in the permanent collection of the Musée d 'Orsay in Paris.  r  nPainted in 1875-1876, it depicts two figures, a woman and man, who sit in the center and right of this painting, respectively. The man, wearing a hat, looks right, off the canvas, while the woman, dressed formally and also wearing a hat, stares vacantly downward. A glass filled with the eponymous greenish liquid sits before her. The painting is a representation of the increasing social isolation in Paris during its stage of rapid growth.

                </p>
                <button type="button" class="deleteBut"onclick="deleteCol('col6');">delete</button>
            </div>
        </div>
        <div class="block" id="col7">
            <div class="figure">
                <img src="../resources/img/45.jpg" width="280" height="320" alt="The painting named Luncheon Boating Party">
            </div>
            <div class="figcap intro">
                <p class="title">Women in the Garden</p>
                <p class="artist"><a class="athbut" href="search.html"> Claude Monet </a></p>
                <p class="style">Impressionism</p>
                <p class="descreption">
                    Monet’s technique of “en plein air” painting was hard at work on this painting. Because it necessitated that he work from the same point of view as he painted, he dug a trench for the bottom half of the painting to sit in while he painted the top, due to its large size (it measures 100 by 81 inches). His model for the women of the painting was Camille Doncieux, who would later become his wife, bearing him two sons. To finish the dresses in the most fashionable style, Monet used magazine illustrations to render the clothing.
                </p>
                <button type="button" class="deleteBut"onclick="deleteCol('col7');">delete</button>
            </div>
        </div>
    </div>
</main>
<footer>
    <?php include_once 'footer.php'; ?>
</footer>
</body>
<script src="footprint.js"></script>
</html>