

function getTotal() {
    let TotalPaTVSHimi = document.getElementsByName('TotalPaTVSHimi');
  
    var Cmimi = document.getElementsByName('Cmimi')[0].value;
    var sasi = document.getElementsByName('sasi')[0].value;
    var totalPaTVSHimi = (Cmimi) * (sasi);
    TotalPaTVSHimi[0].value = parseFloat(totalPaTVSHimi).toFixed(2);
    let tvsh = document.getElementsByName('TVSH');
    let TotalmeTVSH = document.getElementsByName('TotalmeTVSH');
    var tvshtotal = (totalPaTVSHimi) * (0.2);
    tvsh[0].value = parseFloat(tvshtotal).toFixed(2);
    var total = (+totalPaTVSHimi) + (+tvshtotal)
    TotalmeTVSH[0].value  =parseFloat(total).toFixed(2);
}
