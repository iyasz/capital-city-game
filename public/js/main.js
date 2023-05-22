$('#btnSearchProvince').on('click', function(){

    $.ajax({
        type: 'GET',
        url: '/search/capital_city',
        data: {
            slug: location.pathname.split('/')[2],
            capital_city: $('#capitalCityName').val(),
        },
        success: function(e){
            if(e == 'TRUE'){
                iziToast.show({
                    title: "Benar",
                    message: "Jawaban Anda Benar!",
                    position: "topCenter",
                    drag: false,
                    pauseOnHover: false,
                    color: "green",
                    iconUrl: null,
                    timeout: 4100,
                });
            }else{
                iziToast.show({
                    title: "Salah",
                    message: "Jawaban Anda Salah!",
                    position: "topCenter",
                    drag: false,
                    pauseOnHover: false,
                    color: "red",
                    iconUrl: null,
                    timeout: 4100,
                });
                
            }
        },
    })

})



function slugify(string) {
    return string
        .toLowerCase()
        .replace(/[\s\W-]+/g, "-")
        .replace(/^-+|-+$/g, "");
}

$("#visitorMap3").vectorMap({
    map: "indonesia_id",
    backgroundColor: "#ffffff",
    borderColor: "#f2f2f2",
    borderOpacity: 0.8,
    borderWidth: 1,
    hoverColor: "#000",
    hoverOpacity: 0.8,
    color: "#ddd",
    normalizeFunction: "linear",
    selectedRegions: false,
    showTooltip: true,
    onRegionClick: function (event, code, region) {
        var regionName = region;
        console.log(regionName);
        setTimeout(function () {
            window.location.href = `/province/${slugify(regionName)}/capital_city`;
        }, 1400);
    },
});

$("#visitorMap3 svg g path").on("click", function () {
    $("#visitorMap3").css("transform", "scale(3)");
});

