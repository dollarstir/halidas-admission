$(function () {
    $(".mapcontainer13").mapael({
        map: {
            name: "usa_states"
            , defaultArea: {
                attrs: {
                    fill: "#e6ecf5"
                    , stroke: "#888ea8"
                }
                , attrsHover: {
                    fill: "#3b3f5c"
                }
            }
        },
        legend: {
            plot: [
                {
                    labelAttrs: {
                        fill: "#f4f4e8"
                    },
                    titleAttrs: {
                        fill: "#f4f4e8"
                    },
                    cssClass: 'population',
                    mode: 'horizontal',
                    title: "Population",
                    marginBottomTitle: 5,
                    slices: [{
                        size: 15,
                        legendSpecificAttrs: {
                            fill: '#00a1fe',
                            stroke: '#f4f4e8',
                            "stroke-width": 2
                        },
                        label: "< 10 000",
                        max: "10000"
                    }, {
                        size: 30,
                        legendSpecificAttrs: {
                            fill: '#00a1fe',
                            stroke: '#f4f4e8',
                            "stroke-width": 2
                        },
                        label: "> 10 000 and < 100 000",
                        min: "10000",
                        max: "100000"
                    }, {
                        size: 50,
                        legendSpecificAttrs: {
                            fill: '#00a1fe',
                            stroke: '#f4f4e8',
                            "stroke-width": 2
                        },
                        label: "> 100 000",
                        min: "100000"
                    }]
                }
                , {
                    labelAttrs: {
                        fill: "#f4f4e8"
                    },
                    titleAttrs: {
                        fill: "#f4f4e8"
                    },
                    cssClass: 'density',
                    mode: 'horizontal',
                    title: "Density",
                    marginBottomTitle: 5,
                    slices: [{
                        label: "< 50",
                        max: "50",
                        attrs: {
                            fill: "#f8538d"
                        },
                        legendSpecificAttrs: {
                            r: 25
                        }
                    }, {
                        label: "> 50 and < 500",
                        min: "50",
                        max: "500",
                        attrs: {
                            fill: "#25d5e4"
                        },
                        legendSpecificAttrs: {
                            r: 25
                        }
                    }, {
                        label: "> 500",
                        min: "500",
                        attrs: {
                            fill: "#ffbb44"
                        },
                        legendSpecificAttrs: {
                            r: 25
                        }
                    }]
                }
            ]
        },
        plots: {
            'ny': {
                latitude: 40.717079,
                longitude: -74.00116,
                tooltip: {content: "New York"},
                value: [5000, 20]
            },
            'an': {
                latitude: 61.2108398,
                longitude: -149.9019557,
                tooltip: {content: "Anchorage"},
                value: [50000, 20]
            },
            'sf': {
                latitude: 37.792032,
                longitude: -122.394613,
                tooltip: {content: "San Francisco"},
                value: [150000, 20]
            },
            'pa': {
                latitude: 19.493204,
                longitude: -154.8199569,
                tooltip: {content: "Pahoa"},
                value: [5000, 200]
            },
            'la': {
                latitude: 34.025052,
                longitude: -118.192006,
                tooltip: {content: "Los Angeles"},
                value: [50000, 200]
            },
            'dallas': {
                latitude: 32.784881,
                longitude: -96.808244,
                tooltip: {content: "Dallas"},
                value: [150000, 200]
            },
            'miami': {
                latitude: 25.789125,
                longitude: -80.205674,
                tooltip: {content: "Miami"},
                value: [5000, 2000]
            },
            'washington': {
                latitude: 38.905761,
                longitude: -77.020746,
                tooltip: {content: "Washington"},
                value: [50000, 2000]
            },
            'seattle': {
                latitude: 47.599571,
                longitude: -122.319426,
                tooltip: {content: "Seattle"},
                value: [150000, 2000]
            },
            'test1': {
                latitude: 44.671504,
                longitude: -110.957968,
                tooltip: {content: "Test 1"},
                value: [5000, 2000]
            },
            'test2': {
                latitude: 40.667013,
                longitude: -101.465781,
                tooltip: {content: "Test 2"},
                value: [50000, 200]
            },
            'test3': {
                latitude: 38.362031,
                longitude: -86.875938,
                tooltip: {content: "Test 3"},
                value: [150000, 20]
            }
        }
    });
});


$(function () {
    // Specific attributes for the highlighted areas
    var highligh_areas = {
        attrs: {
            fill: "#343f55",
            stroke: "#eaeef1"
        },
        attrsHover: {
            fill: "#77edb0",
            animDuration: 150
        }
    };

    // Deactivate attributes hover for all areas
    $.mapael.prototype.defaultOptions.map.defaultArea.attrsHover = {};

    $(".mapcontainer14").mapael({
        map: {
            name: "france_departments",
            defaultArea: {
                attrs: {
                    fill: "#e6ecf5",
                    stroke: "#888ea8"
                },
                attrsHover: {
                    fill : "#f8538d"
                }
            },
            defaultPlot: {
                attrs: {
                    opacity:0.6
                },
                attrsHover: {
                    opacity:0.9
                }
            },
            afterInit: function(container, paper, areas, plots, options) {
                // Bring all areas to front (in order to have stroke over other areas)
                $.each(options.areas, function(id){
                    areas[id].mapElem.toFront();
                });
                // Bring all plots to front, otherwise they will be hidden by areas
                $.each(options.plots, function(id){
                    plots[id].mapElem.toFront();
                });
                // Zoom on interesting region at init
                container.trigger("zoom", [{
                    level: 4,
                    x: 434,
                    y: 370,
                    animDuration: 0
                }]);
            }
        },
        areas: {
            "department-01": highligh_areas,
            "department-03": highligh_areas,
            "department-07": highligh_areas,
            "department-15": highligh_areas,
            "department-26": highligh_areas,
            "department-38": highligh_areas,
            "department-42": highligh_areas,
            "department-43": highligh_areas,
            "department-63": highligh_areas,
            "department-69": highligh_areas,
            "department-73": highligh_areas,
            "department-74": highligh_areas
        },
        legend: {
            plot: {
                cssClass: 'myLegend',
                labelAttrs: {
                    fill: "#3f4257"
                },
                titleAttrs: {
                    fill: "#3f4257"
                },
                marginBottom: 20,
                marginLeft: 30,
                hideElemsOnClick: {
                    opacity: 0.2
                },
                title: "French cities population in region",
                slices: [{
                    size: 4,
                    type: "circle",
                    max: 20000,
                    attrs: {
                        fill: "#ffbb44"
                    },
                    label: "Less than 20000 inhabitants"
                }, {
                    size: 6,
                    type: "circle",
                    min: 20000,
                    max: 100000,
                    attrs: {
                        fill: "#07e0c4"
                    },
                    label: "Between 20000 and 100000 inhabitants"
                }, {
                    size: 20,
                    type: "circle",
                    min: 100000,
                    max: 200000,
                    attrs: {
                        fill: "#816cfd"
                    },
                    label: "Between 100000 et  200000 inhabitants"
                }, {
                    size: 40,
                    type: "circle",
                    min: 200000,
                    attrs: {
                        fill: "#f8538d"
                    },
                    label: "More than 200000 inhabitants"
                }]
            }
        },
        plots: {
            "town-69123": {
                value: "492578",
                latitude: 45.758888888889,
                longitude: 4.8413888888889,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Lyon (69123)</span><br />Population : 492578"
                }
            },
            "town-42218": {
                value: "174566",
                latitude: 45.433888888889,
                longitude: 4.3897222222222,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Saint-Étienne (42218)</span><br />Population : 174566"
                }
            },
            "town-38185": {
                value: "158249",
                latitude: 45.186944444444,
                longitude: 5.7263888888889,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Grenoble (38185)</span><br />Population : 158249"
                }
            },
            "town-69266": {
                value: "146729",
                latitude: 45.766111111111,
                longitude: 4.8794444444444,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Villeurbanne (69266)</span><br />Population : 146729"
                }
            },
            "town-63113": {
                value: "143669",
                latitude: 45.779722222222,
                longitude: 3.0869444444444,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Clermont-Ferrand (63113)</span><br />Population : 143669"
                }
            },
            "town-26362": {
                value: "65043",
                latitude: 44.9325,
                longitude: 4.8908333333333,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Valence (26362)</span><br />Population : 65043"
                }
            },
            "town-69259": {
                value: "60448",
                latitude: 45.696944444444,
                longitude: 4.8858333333333,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Vénissieux (69259)</span><br />Population : 60448"
                }
            },
            "town-73065": {
                value: "59184",
                latitude: 45.566388888889,
                longitude: 5.9208333333333,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Chambéry (73065)</span><br />Population : 59184"
                }
            },
            "town-74010": {
                value: "52375",
                latitude: 45.899166666667,
                longitude: 6.1294444444444,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Annecy (74010)</span><br />Population : 52375"
                }
            },
            "town-69290": {
                value: "42428",
                latitude: 45.696388888889,
                longitude: 4.9438888888889,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Saint-Priest (69290)</span><br />Population : 42428"
                }
            },
            "town-01053": {
                value: "42184",
                latitude: 46.204722222222,
                longitude: 5.2280555555556,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Bourg-en-Bresse (01053)</span><br />Population : 42184"
                }
            },
            "town-69256": {
                value: "41970",
                latitude: 45.786944444444,
                longitude: 4.925,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Vaulx-en-Velin (69256)</span><br />Population : 41970"
                }
            },
            "town-69034": {
                value: "41840",
                latitude: 45.794722222222,
                longitude: 4.8463888888889,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Caluire-et-Cuire (69034)</span><br />Population : 41840"
                }
            },
            "town-03185": {
                value: "39712",
                latitude: 46.34,
                longitude: 2.6025,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Montluçon (03185)</span><br />Population : 39712"
                }
            },
            "town-69029": {
                value: "39238",
                latitude: 45.738611111111,
                longitude: 4.9130555555556,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Bron (69029)</span><br />Population : 39238"
                }
            },
            "town-42187": {
                value: "38225",
                latitude: 46.036111111111,
                longitude: 4.0680555555556,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Roanne (42187)</span><br />Population : 38225"
                }
            },
            "town-26198": {
                value: "36669",
                latitude: 44.558611111111,
                longitude: 4.7508333333333,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Montélimar (26198)</span><br />Population : 36669"
                }
            },
            "town-38421": {
                value: "36504",
                latitude: 45.166388888889,
                longitude: 5.7647222222222,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Saint-Martin-d'Hères (38421)</span><br />Population : 36504"
                }
            },
            "town-42207": {
                value: "36397",
                latitude: 45.476388888889,
                longitude: 4.5147222222222,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Saint-Chamond (42207)</span><br />Population : 36397"
                }
            },
            "town-38151": {
                value: "36054",
                latitude: 45.142777777778,
                longitude: 5.7177777777778,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Échirolles (38151)</span><br />Population : 36054"
                }
            },
            "town-69264": {
                value: "35900",
                latitude: 45.989444444444,
                longitude: 4.7197222222222,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Villefranche-sur-Saône (69264)</span><br />Population : 35900"
                }
            },
            "town-74281": {
                value: "35257",
                latitude: 46.370555555556,
                longitude: 6.4797222222222,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Thonon-les-Bains (74281)</span><br />Population : 35257"
                }
            },
            "town-26281": {
                value: "34321",
                latitude: 45.045555555556,
                longitude: 5.0508333333333,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Romans-sur-Isère (26281)</span><br />Population : 34321"
                }
            },
            "town-74012": {
                value: "32790",
                latitude: 46.195,
                longitude: 6.2355555555556,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Annemasse (74012)</span><br />Population : 32790"
                }
            },
            "town-69282": {
                value: "30672",
                latitude: 45.766388888889,
                longitude: 5.0027777777778,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Meyzieu (69282)</span><br />Population : 30672"
                }
            },
            "town-69286": {
                value: "30375",
                latitude: 45.820555555556,
                longitude: 4.8975,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Rillieux-la-Pape (69286)</span><br />Population : 30375"
                }
            },
            "town-38544": {
                value: "30169",
                latitude: 45.525555555556,
                longitude: 4.8747222222222,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Vienne (38544)</span><br />Population : 30169"
                }
            },
            "town-15014": {
                value: "29677",
                latitude: 44.925277777778,
                longitude: 2.4397222222222,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Aurillac (15014)</span><br />Population : 29677"
                }
            },
            "town-73008": {
                value: "28439",
                latitude: 45.688611111111,
                longitude: 5.915,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Aix-les-Bains (73008)</span><br />Population : 28439"
                }
            },
            "town-38053": {
                value: "26841",
                latitude: 45.590833333333,
                longitude: 5.2791666666667,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Bourgoin-Jallieu (38053)</span><br />Population : 26841"
                }
            },
            "town-69275": {
                value: "25988",
                latitude: 45.768611111111,
                longitude: 4.9588888888889,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Décines-Charpieu (69275)</span><br />Population : 25988"
                }
            },
            "town-69149": {
                value: "25413",
                latitude: 45.714166666667,
                longitude: 4.8075,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Oullins (69149)</span><br />Population : 25413"
                }
            },
            "town-03310": {
                value: "25235",
                latitude: 46.126944444444,
                longitude: 3.4258333333333,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Vichy (03310)</span><br />Population : 25235"
                }
            },
            "town-01283": {
                value: "23308",
                latitude: 46.255555555556,
                longitude: 5.655,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Oyonnax (01283)</span><br />Population : 23308"
                }
            },
            "town-38169": {
                value: "22485",
                latitude: 45.193055555556,
                longitude: 5.6847222222222,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Fontaine (38169)</span><br />Population : 22485"
                }
            },
            "town-69202": {
                value: "22229",
                latitude: 45.733611111111,
                longitude: 4.8025,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Sainte-Foy-lès-Lyon (69202)</span><br />Population : 22229"
                }
            },
            "town-69204": {
                value: "20982",
                latitude: 45.695277777778,
                longitude: 4.7930555555556,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Saint-Genis-Laval (69204)</span><br />Population : 20982"
                }
            },
            "town-74011": {
                value: "20881",
                latitude: 45.919166666667,
                longitude: 6.1419444444444,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Annecy-le-Vieux (74011)</span><br />Population : 20881"
                }
            },
            "town-38563": {
                value: "20573",
                latitude: 45.363333333333,
                longitude: 5.59,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Voiron (38563)</span><br />Population : 20573"
                }
            },
            "town-03190": {
                value: "20229",
                latitude: 46.564722222222,
                longitude: 3.3325,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Moulins (03190)</span><br />Population : 20229"
                }
            },
            "town-69244": {
                value: "19938",
                latitude: 45.763333333333,
                longitude: 4.78,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Tassin-la-Demi-Lune (69244)</span><br />Population : 19938"
                }
            },
            "town-73011": {
                value: "19713",
                latitude: 45.675833333333,
                longitude: 6.3925,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Albertville (73011)</span><br />Population : 19713"
                }
            },
            "town-63124": {
                value: "19709",
                latitude: 45.741111111111,
                longitude: 3.1963888888889,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Cournon-d'Auvergne (63124)</span><br />Population : 19709"
                }
            },
            "town-43157": {
                value: "19665",
                latitude: 45.043333333333,
                longitude: 3.885,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Le Puy-en-Velay (43157)</span><br />Population : 19665"
                }
            },
            "town-74268": {
                value: "19499",
                latitude: 45.888888888889,
                longitude: 6.0961111111111,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Seynod (74268)</span><br />Population : 19499"
                }
            },
            "town-69091": {
                value: "19258",
                latitude: 45.590555555556,
                longitude: 4.7688888888889,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Givors (69091)</span><br />Population : 19258"
                }
            },
            "town-26058": {
                value: "19133",
                latitude: 44.9475,
                longitude: 4.8952777777778,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Bourg-lès-Valence (26058)</span><br />Population : 19133"
                }
            },
            "town-38553": {
                value: "18703",
                latitude: 45.613333333333,
                longitude: 5.1486111111111,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Villefontaine (38553)</span><br />Population : 18703"
                }
            },
            "town-63300": {
                value: "18684",
                latitude: 45.893611111111,
                longitude: 3.1125,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Riom (63300)</span><br />Population : 18684"
                }
            },
            "town-69081": {
                value: "18413",
                latitude: 45.774444444444,
                longitude: 4.7775,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Écully (69081)</span><br />Population : 18413"
                }
            },
            "town-38229": {
                value: "18065",
                latitude: 45.208611111111,
                longitude: 5.7794444444444,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Meylan (38229)</span><br />Population : 18065"
                }
            },
            "town-74081": {
                value: "17877",
                latitude: 46.060277777778,
                longitude: 6.5786111111111,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Cluses (74081)</span><br />Population : 17877"
                }
            },
            "town-63075": {
                value: "17683",
                latitude: 45.773611111111,
                longitude: 3.0669444444444,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Chamalières (63075)</span><br />Population : 17683"
                }
            },
            "town-74093": {
                value: "17605",
                latitude: 45.903611111111,
                longitude: 6.1038888888889,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Cran-Gevrier (74093)</span><br />Population : 17605"
                }
            },
            "town-42095": {
                value: "17380",
                latitude: 45.388055555556,
                longitude: 4.2872222222222,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Firminy (42095)</span><br />Population : 17380"
                }
            },
            "town-07010": {
                value: "17275",
                latitude: 45.24,
                longitude: 4.6708333333333,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Annonay (07010)</span><br />Population : 17275"
                }
            },
            "town-69199": {
                value: "16787",
                latitude: 45.708611111111,
                longitude: 4.8533333333333,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Saint-Fons (69199)</span><br />Population : 16787"
                }
            },
            "town-38382": {
                value: "16355",
                latitude: 45.231666666667,
                longitude: 5.6830555555556,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Saint-Égrève (38382)</span><br />Population : 16355"
                }
            },
            "town-74256": {
                value: "16184",
                latitude: 45.936388888889,
                longitude: 6.6319444444444,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Sallanches (74256)</span><br />Population : 16184"
                }
            },
            "town-38193": {
                value: "15980",
                latitude: 45.619444444444,
                longitude: 5.2330555555556,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">L'Isle-d'Abeau (38193)</span><br />Population : 15980"
                }
            },
            "town-42147": {
                value: "15899",
                latitude: 45.6075,
                longitude: 4.0652777777778,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Montbrison (42147)</span><br />Population : 15899"
                }
            },
            "town-42186": {
                value: "15153",
                latitude: 45.529444444444,
                longitude: 4.6169444444444,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Rive-de-Gier (42186)</span><br />Population : 15153"
                }
            },
            "town-63178": {
                value: "14475",
                latitude: 45.544166666667,
                longitude: 3.2488888888889,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Issoire (63178)</span><br />Population : 14475"
                }
            },
            "town-42279": {
                value: "14425",
                latitude: 45.499444444444,
                longitude: 4.24,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Saint-Just-Saint-Rambert (42279)</span><br />Population : 14425"
                }
            },
            "town-01004": {
                value: "14316",
                latitude: 45.958055555556,
                longitude: 5.3577777777778,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Ambérieu-en-Bugey (01004)</span><br />Population : 14316"
                }
            },
            "town-74225": {
                value: "13892",
                latitude: 45.866111111111,
                longitude: 5.9444444444444,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Rumilly (74225)</span><br />Population : 13892"
                }
            },
            "town-03095": {
                value: "13873",
                latitude: 46.134444444444,
                longitude: 3.4563888888889,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Cusset (03095)</span><br />Population : 13873"
                }
            },
            "town-03321": {
                value: "13545",
                latitude: 46.565833333333,
                longitude: 3.3544444444444,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Yzeure (03321)</span><br />Population : 13545"
                }
            },
            "town-26235": {
                value: "13337",
                latitude: 44.3775,
                longitude: 4.6961111111111,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Pierrelatte (26235)</span><br />Population : 13337"
                }
            },
            "town-69089": {
                value: "13159",
                latitude: 45.736388888889,
                longitude: 4.7636111111111,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Francheville (69089)</span><br />Population : 13159"
                }
            },
            "town-42044": {
                value: "13023",
                latitude: 45.396111111111,
                longitude: 4.325,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Le Chambon-Feugerolles (42044)</span><br />Population : 13023"
                }
            },
            "town-69277": {
                value: "12340",
                latitude: 45.731388888889,
                longitude: 5.0022222222222,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Genas (69277)</span><br />Population : 12340"
                }
            },
            "town-74042": {
                value: "12321",
                latitude: 46.078888888889,
                longitude: 6.4008333333333,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Bonneville (74042)</span><br />Population : 12321"
                }
            },
            "town-38485": {
                value: "12293",
                latitude: 45.181388888889,
                longitude: 5.6991666666667,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Seyssinet-Pariset (38485)</span><br />Population : 12293"
                }
            },
            "town-07019": {
                value: "12205",
                latitude: 44.619722222222,
                longitude: 4.3902777777778,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Aubenas (07019)</span><br />Population : 12205"
                }
            },
            "town-01033": {
                value: "12161",
                latitude: 46.1075,
                longitude: 5.8258333333333,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Bellegarde-sur-Valserine (01033)</span><br />Population : 12161"
                }
            },
            "town-74243": {
                value: "12125",
                latitude: 46.144166666667,
                longitude: 6.0841666666667,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Saint-Julien-en-Genevois (74243)</span><br />Population : 12125"
                }
            },
            "town-69283": {
                value: "11931",
                latitude: 45.663055555556,
                longitude: 4.9530555555556,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Mions (69283)</span><br />Population : 11931"
                }
            },
            "town-74208": {
                value: "11917",
                latitude: 45.923611111111,
                longitude: 6.6863888888889,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Passy (74208)</span><br />Population : 11917"
                }
            },
            "town-63430": {
                value: "11645",
                latitude: 45.856388888889,
                longitude: 3.5475,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Thiers (63430)</span><br />Population : 11645"
                }
            },
            "town-73179": {
                value: "11620",
                latitude: 45.596666666667,
                longitude: 5.8775,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">La Motte-Servolex (73179)</span><br />Population : 11620"
                }
            },
            "town-69027": {
                value: "11518",
                latitude: 45.673888888889,
                longitude: 4.7541666666667,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Brignais (69027)</span><br />Population : 11518"
                }
            },
            "town-38317": {
                value: "11386",
                latitude: 45.123055555556,
                longitude: 5.6980555555556,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Le Pont-de-Claix (38317)</span><br />Population : 11386"
                }
            },
            "town-74133": {
                value: "11345",
                latitude: 46.185,
                longitude: 6.2075,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Gaillard (74133)</span><br />Population : 11345"
                }
            },
            "town-38474": {
                value: "11317",
                latitude: 45.205,
                longitude: 5.665,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Sassenage (38474)</span><br />Population : 11317"
                }
            },
            "town-07102": {
                value: "11291",
                latitude: 44.934444444444,
                longitude: 4.8747222222222,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Guilherand-Granges (07102)</span><br />Population : 11291"
                }
            },
            "town-07324": {
                value: "11287",
                latitude: 45.067222222222,
                longitude: 4.8327777777778,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Tournon-sur-Rhône (07324)</span><br />Population : 11287"
                }
            },
            "town-63032": {
                value: "11229",
                latitude: 45.751666666667,
                longitude: 3.0830555555556,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Beaumont (63032)</span><br />Population : 11229"
                }
            },
            "town-42184": {
                value: "11022",
                latitude: 46.042777777778,
                longitude: 4.0405555555556,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Riorges (42184)</span><br />Population : 11022"
                }
            },
            "town-63284": {
                value: "10891",
                latitude: 45.798333333333,
                longitude: 3.2483333333333,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Pont-du-Château (63284)</span><br />Population : 10891"
                }
            },
            "town-74224": {
                value: "10814",
                latitude: 46.066944444444,
                longitude: 6.3119444444444,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">La Roche-sur-Foron (74224)</span><br />Population : 10814"
                }
            },
            "town-01173": {
                value: "10634",
                latitude: 46.333333333333,
                longitude: 6.0577777777778,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Gex (01173)</span><br />Population : 10634"
                }
            },
            "town-63164": {
                value: "10524",
                latitude: 45.825833333333,
                longitude: 3.1447222222222,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Gerzat (63164)</span><br />Population : 10524"
                }
            },
            "town-69243": {
                value: "10523",
                latitude: 45.896111111111,
                longitude: 4.4330555555556,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Tarare (69243)</span><br />Population : 10523"
                }
            },
            "town-42189": {
                value: "10522",
                latitude: 45.433888888889,
                longitude: 4.3236111111111,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Roche-la-Molière (42189)</span><br />Population : 10522"
                }
            },
            "town-26057": {
                value: "10381",
                latitude: 45.037777777778,
                longitude: 5.05,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Bourg-de-Péage (26057)</span><br />Population : 10381"
                }
            },
            "town-69273": {
                value: "10327",
                latitude: 45.668055555556,
                longitude: 4.9019444444444,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Corbas (69273)</span><br />Population : 10327"
                }
            },
            "town-38565": {
                value: "10146",
                latitude: 45.297777777778,
                longitude: 5.6369444444444,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Voreppe (38565)</span><br />Population : 10146"
                }
            },
            "town-69152": {
                value: "10061",
                latitude: 45.703611111111,
                longitude: 4.8241666666667,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Pierre-Bénite (69152)</span><br />Population : 10061"
                }
            },
            "town-42005": {
                value: "9893",
                latitude: 45.526111111111,
                longitude: 4.2602777777778,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Andrézieux-Bouthéon (42005)</span><br />Population : 9893"
                }
            },
            "town-63014": {
                value: "9824",
                latitude: 45.750833333333,
                longitude: 3.1108333333333,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Aubière (63014)</span><br />Population : 9824"
                }
            },
            "town-69271": {
                value: "9813",
                latitude: 45.744444444444,
                longitude: 4.9663888888889,
                href: "#",
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Chassieu (69271)</span><br />Population : 9813"
                }
            }
        }
    });
});