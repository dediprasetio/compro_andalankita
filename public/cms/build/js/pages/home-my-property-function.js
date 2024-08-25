//On Load Page
$(document).ready(function () {
    if(levelAgen == 'agen'){
        loadPageMyProperty(1)
    }
});

//Get data
function viewAllHome(page = 1) {
    $.ajax({
        url: rootApp + "api/property/by-agent/"+page,
        type: "GET",
        data: {
            agent_name : agentName
        },
        dataType: "json",
        success: function (res) {
            //Render data to view
            __renderMyProperty(res.data)

            //Create link page
            total_rows = res.total
            const linkCollection = createLinkMyProperty(res.page, res.total, res.per_page)
            $('#paging-collection').html(linkCollection)
            $('.showing-rows').html(`Ditampilkan ${res.showing} dari total ${res.total} Properti`)
            $('#content-title').html('Semua daftar properti saya')
        },
        error: function (request, error) {
            // console.log("Request: " + JSON.stringify(request));
        },
    });
}

//Render view list
function __renderMyProperty(data) {
    //CHECK HAVE LOGGED IN YET? ONLY AGEN WILL HAVE VALUE
    const levelAgen = getCookie(appShortName+'MAIN_level') != '' ? getCookie(appShortName+'MAIN_level') : '';
    const agentName = getCookie(appShortName+'MAIN_fullname') != '' ? getCookie(appShortName+'MAIN_fullname') : '';
        
    var listData = ``;
    $.each(data, function (index, key) {
        let additionalInfo = ``;
        // if(levelAgen == 'agen' && key.agent_name == agentName){
            additionalInfo = `<p><i class="fa fa-money mr-1"></i>${key.fee}%</p>
                            <p><i class="fa fa-user-secret mr-1"></i>Owner : ${key.owner_name}</p>`;
            
        // }
        listData += `<div class="col-lg-3 col-md-3 col-sm-4 mt-40">
					<div class="single-product-wrap">
						<div class="product_desc">
							<div class="product_desc_info">
								<div class="product-review">
									<h5 class="manufacturer">
										<a href="#">${key.asset_category_name}</a>
									</h5>
									<div class="rating-box">
										<ul class="rating">
											${key.sale_type == 1 ? '<span class="badge badge-info">Sewa</span>' : '<span class="badge badge-warning">Jual</span>'}
										</ul>
									</div>
								</div>
								<h4><a class="product_name" href="#">${key.property_title}</a></h4>
								<p class="mt-1 text-teal-400">
                                    <small> [${key.unit_number} | ${key.area_name} | ${key.city_name}] </small>
								</p>
								<p><i class="fa fa-bed mr-1"></i>${key.bedroom} Kamar Tidur</p>
								<p><i class="fa fa-bath mr-1"></i>${key.bathroom} Kamar Mandi</p>
								<p><i class="fa fa-address-card mr-1"></i>${key.agent_name}</p>
								<p><i class="fa fa-arrows mr-1"></i>LT ${numberWithCommas(key.land_area)} m<sup>2</sup> | LB ${numberWithCommas(key.building_area)} m<sup>2</sup></p>
                                ${additionalInfo}
								<div>
									<span class="new-price">Rp. ${numberWithCommas(key.price)}</span>
								</div>
							</div>
							<div class="add-actions">
								<ul class="add-actions-link">
									<li class="add-cart active" style="width: 100%;"><a href="javascript:void(0)"><small>Info Lanjutan Hubungi Agen</small></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>`
    })
    $('#property-list').html(listData)
}


//Pagination
var current_page = 1;
var total_rows = 0;

function prevPageMyProperty() {
    if (current_page > 1) {
        current_page--;
        loadPageMyProperty(current_page);
    }
}

function nexPageMyProperty() {
    if (current_page < total_rows) {
        current_page++;
        loadPageMyProperty(current_page);
    }
}

function loadPageMyProperty(page = 1) {
    viewAllHome(page)
}

function createLinkMyProperty(page = 1, totalRows = 1, perPage = 1) {
    var linkCollection = ``
    var numPagesCollection = Math.ceil(totalRows / perPage)

    //Push Previous button
    if (page != 1) {
        linkCollection += `<li><a href="javascript:prevPageMyProperty()" id="btn_prev" class="Previous"><i class="fa fa-chevron-left"></i> Sebelumnya</a></li>`
    } else {
        linkCollection += `<li><a href="javascript:void(0)" id="btn_prev" class="text-secondary"><i class="fa fa-chevron-left"></i> Sebelumnya</a></li>`
    }

    //Push target page link when the value is less than current page
    var min = 1;
    for (var i = page - 3; i <= page; i++) {
        if (i >= 1 && i != page) {
            // linkCollection += `<a href="javascript:loadPageMyProperty(${i})" id="btn_prev">${i}</a>`
            linkCollection += `<li><a href="javascript:loadPageMyProperty(${i})"">${i}</a></li>`
        }
    }

    //Push target page link for the current page
    linkCollection += `<li class="active"><a href="javascript:loadPageMyProperty(${page})"">${page}</a></li>`

    //Push target page link when the value is more than current page
    var min = 1;
    for (var i = page; i <= parseInt(page) + 2; i++) {
        if (i <= numPagesCollection && i != page) {
            linkCollection += `<li><a href="javascript:loadPageMyProperty(${i})"">${i}</a></li>`
        }
    }

    //Push Next button
    if (page != numPagesCollection) {
        linkCollection += `<li><a href="javascript:nexPageMyProperty()" id="btn_next" class="Next"> Next <i class="fa fa-chevron-right"></i></a></li>`
    } else {
        linkCollection += `<li><a href="javascript:void(0)" id="btn_next" class="text-secondary"> Next <i class="fa fa-chevron-right"></i></a></li>`
    }

    return linkCollection
}