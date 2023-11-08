$(function () {
    $(".mapcontainer").mapael({
        map: {
            // Set the name of the map to display
            name: "africa",
            defaultArea: {
                attrs: {
                    stroke: "#fff",
                    "stroke-width": 0.5,
                    fill: "#b1babf"
                    
                },
                attrsHover: {
                    "stroke-width": 4
                }
            },


        },
        legend: {
            area: {
                title: "M31 Office Types",
                slices: [
                    {
                        max: 1,
                        attrs: {
                            fill: "#049cfc"
                        },
                        label: "Regional Office"
                    },
                   
                ]
                }
            },

                    
        plots: {
          'South Sudan': {
                x: 680,
                y: 450,
                size: 35,
                type: "circle",
                tooltip: {content: "<span style=\"font-weight:bold;\">Country :</span> South Sudan <br /> City: Juba <br /> M31 Satellite Office"},
                attrs: {
                    fill: "#f9ac04",
                    }
            },

            'Rwanda': {
                x: 660,
                y: 540,
                size: 35,
                type: "circle",
                tooltip: {content: "<span style=\"font-weight:bold;\">Country :</span> Rwanda <br /> City: Kigali <br /> M31 Satellite Office"},
                attrs: {
                    fill: "#f9ac04",
                    }
            },


            'Tanzania': {
                x: 730,
                y: 610,
                size: 35,
                type: "circle",
                tooltip: {content: "<span style=\"font-weight:bold;\">Country :</span> Tanzania <br /> City: Dodoma <br /> M31 Satellite Office"},
                attrs: {
                    fill: "#f9ac04",
                    }
            },

            'Angola': {
                x: 460,
                y: 640,
                size: 35,
                type: "circle",
                tooltip: {content: "<span style=\"font-weight:bold;\">Country :</span> Angola <br /> City: Luanda <br /> M31 Satellite Office"},
                attrs: {
                    fill: "#f9ac04",
                    }
            },

            'DRC': {
                x: 470,
                y: 580,
                size: 35,
                type: "circle",
                tooltip: {content: "<span style=\"font-weight:bold;\">Country :</span> Democratic Republic of the Congo <br /> City: Kingshasa <br /> M31 Satellite Office"},
                attrs: {
                    fill: "#f9ac04",
                    }
            },

        

            'Mozambique': {
                x: 690,
                y: 860,
                size: 35,
                type: "circle",
                tooltip: {content: "<span style=\"font-weight:bold;\">Country :</span> Mozambique <br /> City: Maputo <br /> M31 Satellite Office"},
                attrs: {
                    fill: "#f9ac04",
                    }
            },


            'Ethiopia': {
                x: 780,
                y: 400,
                size: 35,
                type: "circle",
                tooltip: {content: "<span style=\"font-weight:bold;\">Country :</span> Ethiopia <br /> City: Addis Ababa <br /> M31 Satellite Office"},
                attrs: {
                    fill: "#f9ac04",
                    }
            },

            'Kenya': {
                x: 750,
                y: 530,
                size: 35,
                type: "circle",
                tooltip: {content: "<span style=\"font-weight:bold;\">Country :</span> Kenya <br /> City: Nairobi <br /> M31 Satellite Office"},
                attrs: {
                    fill: "#f9ac04",
                    }
            },
        },
        
        areas: {
            "ZM": {
                value:"1",
                tooltip: {content: "<span style=\"font-weight:bold;\">Country: Zambia</span><br /> M31 HQ and Southern Africa Regional Office"},
                
            },
            "ZA": {
                value:"1",
                tooltip: {content: "<span style=\"font-weight:bold;\">Country: South Africa</span><br /> M31 Country Office"},
                
            },
            "NA": {
                value:"1",
                tooltip: {content: "<span style=\"font-weight:bold;\">Country: Namibia</span><br /> M31 Country Office"},
                
            },
            "SZ": {
                value:"1",
                tooltip: {content: "<span style=\"font-weight:bold;\">Country: Eswatini</span><br /> M31 Country Office"},
                
            },
            "ZW": {
                value:"1",
                tooltip: {content: "<span style=\"font-weight:bold;\">Country: Zimbabwe</span><br /> M31 Country Office"},
                
            },
            "BW": {
                value:"1",
                tooltip: {content: "<span style=\"font-weight:bold;\">Country: Botwana</span><br /> M31 Country Office"},
                
            },
            "MW": {
                value:"1",
                tooltip: {content: "<span style=\"font-weight:bold;\">Country: Malawi</span><br /> M31 Country Office"},
                
            },
            "LS": {
                value:"1",
                tooltip: {content: "<span style=\"font-weight:bold;\">Country: Lesotho</span><br /> M31 Country Office"},
                
            },
        },
       
    });
});