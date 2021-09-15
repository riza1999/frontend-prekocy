<style>
    /*General Styling*/
    body {
        background-color: #f2f2f2;
        font-family: 'Karla', Arial, sans-serif;
    }

    body * {
            box-sizing: border-box;
        }

    h2 {
        font-size: 18px;
        font-weight: bold;
    }

    small {
        font-size: 14px;
    }

    .pull {
        float: left;
    }

    .push {
        float: right;
    }

    .container {
    width: 100%;
    max-width: 960px;
    margin: 100px auto;
    }

    img {
        width: 100%;
        display: block;
    }

    /*Card Styling*/

    .card {
        border: 1px solid #dedede;
        background-color: white;
    }

    .card__wrap--inner {
                padding: 12px;
            }

    .card__item {
            padding: 12px 18px 12px 18px;
        }

    .card__sub {
            padding: 0 18px;
        }

    .card__footer {
            padding: 18px;
            overflow: hidden;
            border-top: 1px solid #dedede;
        }

    /*Card Flex Code*/

    .card {
        display: flex;
        flex-direction: column;
        width: 100%;
    }

    .card__wrap--outer {
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                width: 100%;
            }

    .card__wrap--inner {
                display: flex;
                flex-direction: row;
                width: 100%;
            }

    @media (min-width: 480px) {

    .card__wrap--inner { 
                    width: 50%
            }
                }

    @media (min-width: 1024px) {

    .card__wrap--inner { 
                    width: 33.33%
            }
                }

    .flexible {
        flex-grow: 1;
    }
</style>
<html>
    <div class="container">
        <div class="card__wrap--outer">
            <div class="card__wrap--inner">
                <div class="card">
                    <img src="http://via.placeholder.com/290x150?text=FlexCards">
                    <div class="card__item">
                        <h2>First Card Title</h2>
                    </div>
                    <div class="card__sub">
                        <small>New York</small>
                    </div>
                    <div class="card__item flexible">
                        <small>Vexillologist mustache heirloom plaid adaptogen subway tile. Biodiesel microdosing pinterest, cloud bread vice kickstarter pickled PBR&B. Prism palo santo craft beer cold-pressed, heirloom tofu snackwave fashion axe ramps iPhone.</small>
                    </div>
                    <div class="card__item">
                        <small>Reading Time: 4min</small>
                    </div>
                    <div class="card__footer">
                    <a class="pull" href="#"><small>Read more</small></a>
                    <a class="push" href="#"><small>Share</small></a>
                    </div>
                </div>
            </div>
        
        <div class="card__wrap--inner">
                <div class="card">
                    <img src="http://via.placeholder.com/290x150?text=FlexCards">
                    <div class="card__item">
                        <h2>Second Card Title</h2>
                    </div>
                    <div class="card__sub">
                        <small>Paris</small>
                    </div>
                    <div class="card__item  flexible">
                        <small>Celiac pour-over fanny pack, adaptogen yuccie trust fund tote bag man braid activated charcoal narwhal church-key crucifix. Farm-to-table sartorial retro snackwave mixtape, live-edge 8-bit activated charcoal art party succulents. Crucifix actually try-hard wayfarers echo park skateboard, street art shaman intelligentsia humblebrag celiac umami farm-to-table.</small>
                    </div>
                    <div class="card__item">
                        <small>Reading Time: 2min</small>
                    </div>
                    <div class="card__footer">
                    <a class="pull" href="#"><small>Read more</small></a>
                    <a class="push" href="#"><small>Share</small></a>
                    </div>
                </div>
            </div>
        
        <div class="card__wrap--inner">
                <div class="card">
                    <img src="http://via.placeholder.com/290x150?text=FlexCards">
                    <div class="card__item">
                        <h2>Third Card Title</h2>
                    </div>
                    <div class="card__sub">
                        <small>London</small>
                    </div>
                    <div class="card__item flexible">
                        <small>VTbh four loko YOLO listicle forage messenger bag aesthetic williamsburg franzen kitsch iceland ethical venmo man braid poutine</small>
                    </div>
                    <div class="card__item">
                        <small>Reading Time: 8min</small>
                    </div>
                    <div class="card__footer">
                    <a class="pull" href="#"><small>Read more</small></a>
                    <a class="push" href="#"><small>Share</small></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</html>