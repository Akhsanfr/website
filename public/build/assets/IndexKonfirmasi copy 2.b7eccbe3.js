import{k as p,o as r,c as i,a,F as h,t as l,w as u,v as m,b as d,d as c}from"./app.f1df47c4.js";import{_ as b}from"./_plugin-vue_export-helper.cdc0426e.js";const k={data(){return{hadir:this.$parent.$parent.user&&this.$parent.$parent.user.hadir,editMode:!!(this.$parent.$parent.user&&this.$parent.$parent.user.hadir===-1)}},methods:{edit(){this.editMode=!0},konfirmasi(e){this.hadir=e,this.submitKonfirmasi()},ubahJumlahKehadiran(e){e===-1&&this.hadir===1||(this.hadir+=e)},konfirmasiJumlah(){this.submitKonfirmasi(),this.editJumlahKehadiran},async submitKonfirmasi(){p.Inertia.post("/api/konfirmasi",{hadir:this.hadir,param:this.$parent.$parent.param},{onSuccess:()=>{alert("Sukses menyimpan data")},onError:e=>{alert(e)}})}}},g={class:"group-index-content"},f={class:"isi py-20"},_={class:"rounded shadow-xl p-4 md:p-8",style:{"background-color":"rgba(240, 240, 240, 0.6)"}},y={style:{"background-image":"url('/img/bg.png')"},class:"border-yellow border-4 p-4 sm:p-20 flex flex-col items-center"},x=a("h1",{class:"judul"},"Konfirmasi Kehadiran",-1),v={key:0},$={key:0},K={key:0,class:"my-4 text-sm"},w={key:1,class:"text-red-500"},S=d(" Tanpa mengurangi rasa hormat kami bermaksud mengundang Bapak/Ibu/Saudara(i) untuk menghadiri acara "),C={class:"decoration-green underline decoration-2"},M=d(" yang akan dilaksanakan pada "),B={class:"decoration-green underline decoration-2"},J=d(" pada jam "),N={class:"decoration-green underline decoration-2"},j={class:"flex flex-col justify-center items-center md:flex-row space-y-2 md:space-y-0 space-x-0 md:space-x-2 mt-8"},T=a("p",null," Terima kasih atas rencana kehadiran Bapak/Ibu/Saudara/i sebanyak ",-1),I={class:"flex items-center space-x-2 justify-center"},V=a("p",null,"orang yang akan menghadiri acara",-1),A={key:2},L=d(" Terima kasih atas konfirmasi "),D=a("strong",{class:"text-dark-green"},"kehadiran",-1),E=c('<img class="gambar top-[-100px] right-[-100px] h-[500px] rotate-180 scale-x-[-1]" src="/img/bunga-1.png"><svg viewBox="0 0 500 500" fill="none" class="gambar"><defs><linearGradient id="grad1" x1="0%" y1="0%" x2="0%" y2="100%"><stop offset="0%" style="stop-color:#5b912f;stop-opacity:1;"></stop><stop offset="100%" style="stop-color:rgb(255, 255, 255);stop-opacity:0;"></stop></linearGradient></defs><path fill="url(#grad1)" d="M0.012,164.716C0.012,164.716 116.907,108.433 249.469,165.229C382.421,222.193 500.392,165.745 500.392,165.745L501.102,498.991L-0.11,499.209L0.012,164.716Z"></path></svg><img class="gambar bottom-[-500px] right-0 h-[1000px]" src="/img/bunga-3.png">',3);function F(e,s,G,U,o,n){return r(),i("div",g,[a("div",f,[a("div",_,[a("div",y,[x,e.$parent.$parent.user?o.editMode?(r(),i(h,{key:1},[o.hadir===-1?(r(),i("div",$,[e.$parent.$parent.user.diundang_ke==="undefined"?(r(),i("p",K)):(r(),i("p",w,[S,a("strong",C,l(e.$parent.$parent.user.hadir_ke===e.bwi?"Akad Nikah":"Ngunduh Mantu"),1),M,a("strong",B,l(e.$parent.$parent.user.hadir_ke===e.bwi?"3 September 2022":"11 September 2022"),1),J,a("strong",N,l(e.$parent.$parent.user.hadir_ke===e.bwi?"Akad Nikah":this.$parent.$parent.user.jadwal),1)])),a("div",j,[a("option",{onClick:s[0]||(s[0]=t=>n.konfirmasi(1)),class:"btn btn-sm"}," Ya, hadir "),a("option",{onClick:s[1]||(s[1]=t=>n.konfirmasi(0)),class:"btn btn-sm"}," Maaf, tidak hadir ")])])):(r(),i(h,{key:1},[T,a("div",I,[a("button",{class:"btn btn-sm",onClick:s[2]||(s[2]=t=>n.ubahJumlahKehadiran(-1))}," - "),u(a("input",{class:"rounded-lg border-2 w-16 border-green text-2xl text-center","onUpdate:modelValue":s[3]||(s[3]=t=>o.hadir=t)},null,512),[[m,o.hadir]]),a("button",{class:"btn btn-sm",onClick:s[4]||(s[4]=t=>n.ubahJumlahKehadiran(1))}," + ")]),V,a("button",{onClick:s[5]||(s[5]=(...t)=>n.submitKonfirmasi&&n.submitKonfirmasi(...t)),class:"btn btn-sm"}," Konfirmasi kehadiran ")],64))],64)):(r(),i("div",A,[a("p",null,[L,D,d(" saudara sebanyak "+l(o.hadir)+" orang ",1)]),a("button",{class:"btn",onClick:s[6]||(s[6]=(...t)=>n.edit&&n.edit(...t))}," Ubah Jumlah Kehadiran ")])):(r(),i("p",v," Silakan scan barcode undangan Anda terlebih dahulu "))])])]),E])}const q=b(k,[["render",F]]);export{q as default};