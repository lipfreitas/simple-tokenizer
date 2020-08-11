var simpleTokenizer = {
    salt: '',
    defineSalt: function(salt){
        simpleTokenizer.salt = salt;
    },
    getHash: function(){
        let hash = '';
        let now = new Date();
        let timex = '';
        let month = now.getMonth() + 1;
        let hour = now.getHours();
        if(month < 10){
            month = '0'+ month;
        }
        let day = now.getDate();
        if(day < 10){
            day = '0' + day;
        }
        if(hour < 10){
            hour = '0' + hour;
        }
        timex = now.getFullYear() + month + day + hour + now.getMinutes();
        console.log(timex);
        //todo: enable sha1 hashing and building hash return 
        return hash;  
    }
}
simpleTokenizer.defineSalt('2222');
simpleTokenizer.getHash();