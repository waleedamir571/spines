(function ($) {
    $(document).ready(function(){
        $.toPriceForm = function (price) {
            return +((+price).toFixed(2))
        };
        $.usdView = function (price) {
            return (+price).toLocaleString("en-US", {style: "currency", currency: "USD"});
        };
        $.fullMonthsSince = function (date) {
            const now = new Date();
            const past = new Date(date);

            // Calculate the difference in months and years
            let months = (now.getFullYear() - past.getFullYear()) * 12;
            months -= past.getMonth();
            months += now.getMonth();

            // Adjust for incomplete months
            if (now.getDate() < past.getDate()) {
                months--;
            }

            // Return the result, ensuring it's not negative
            return Math.max(months, 0);
        };
        $.getHoursAgo = function (orderingDate) {
            const dateNow = new Date();
            const interval = dateNow - orderingDate;
            let hoursAgo = Math.floor(interval / (1000 * 60 * 60));
            console.log('hoursAgo', hoursAgo)
            console.log('daysAgo', hoursAgo/24)

            return hoursAgo < 1 ? 0 : hoursAgo;
        };
    });
})(jQuery);
