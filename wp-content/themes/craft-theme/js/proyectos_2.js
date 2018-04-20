"use strict";var Shuffle=window.Shuffle,Demo2=function(e){this.element=e,this.shuffle=new Shuffle(e,{itemSelector:".picture-item",sizer:e.querySelector(".my-sizer-element")}),this.addShuffleEventListeners(),this._activeFilters=[],this.addFilterButtons(),this.addSorting(),this.addSearchFilter(),this.mode="exclusive"};Demo2.prototype.toggleMode=function(){"additive"===this.mode?this.mode="exclusive":this.mode="additive"},Demo2.prototype.addShuffleEventListeners=function(){this.shuffle.on(Shuffle.EventType.LAYOUT,function(e){}),this.shuffle.on(Shuffle.EventType.REMOVED,function(e){})},Demo2.prototype.addFilterButtons=function(){var e=document.querySelector(".filter-options");if(e){Array.from(e.children).forEach(function(e){e.addEventListener("click",this._handleFilterClick.bind(this),!1)},this)}},Demo2.prototype._handleFilterClick=function(e){var t=e.currentTarget,i=t.classList.contains("active"),r=t.getAttribute("data-group");if("additive"===this.mode)i?this._activeFilters.splice(this._activeFilters.indexOf(r)):this._activeFilters.push(r),console.log(this._activeFilters),t.classList.toggle("active"),this.shuffle.filter(this._activeFilters);else{this._removeActiveClassFromChildren(t.parentNode);var o;i?(t.classList.remove("active"),o=Shuffle.ALL_ITEMS):(t.classList.add("active"),o=r),console.log(o),this.shuffle.filter(o)}},Demo2.prototype._removeActiveClassFromChildren=function(e){for(var t=e.children,i=t.length-1;i>=0;i--)t[i].classList.remove("active")},Demo2.prototype.addSorting=function(){var e=document.querySelector(".sort-options");e&&e.addEventListener("change",this._handleSortChange.bind(this))},Demo2.prototype._handleSortChange=function(e){e.currentTarget;Array.from(e.currentTarget.children).forEach(function(t){t.querySelector("input").value===e.target.value?t.classList.add("active"):t.classList.remove("active")});var t=e.target.value,i={};"date-created"===t?i={by:function(e){return e.getAttribute("data-date-created")}}:"name"===t?i={by:function(e){return e.getAttribute("data-name").toLowerCase()}}:"area"===t?i={reverse:!0,by:function(e){return e.getAttribute("data-area").toLowerCase()}}:"services"===t&&(i={by:function(e){return e.getAttribute("data-services").toLowerCase()}}),this.shuffle.sort(i)},Demo2.prototype.addSearchFilter=function(){var e=document.querySelector(".js-shuffle-search");e&&e.addEventListener("keyup",this._handleSearchKeyup.bind(this))},Demo2.prototype._handleSearchKeyup=function(e){var t=e.target.value.toLowerCase();this.shuffle.filter(function(e,i){if(i.group!==Shuffle.ALL_ITEMS){if(!(-1!==JSON.parse(e.getAttribute("data-groups")).indexOf(i.group)))return!1}return-1!==e.querySelector(".picture-item__title").textContent.toLowerCase().trim().indexOf(t)})},document.addEventListener("DOMContentLoaded",function(){window.demo2=new Demo2(document.getElementById("grid-portfolio"))});