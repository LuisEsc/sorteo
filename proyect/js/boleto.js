/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function Boleto(n) {
    this.n = n;
}

Boleto.prototype.draw = function (container) {
    $('#' + container).append("<div class=\"boleto\"><span>" + this.n + "</span></div>");
    
};