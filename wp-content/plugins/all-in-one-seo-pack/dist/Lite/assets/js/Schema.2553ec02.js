import{B as w}from"./Textarea.0ead8bde.js";import{C as k}from"./Blur.77607e56.js";import{C as S}from"./SettingsRow.aef25413.js";import{C as T}from"./Index.af8a043b.js";import{y as o,o as l,c as g,D as n,m as i,a as x,t as u,E as m,l as f,d as b}from"./vue.esm-bundler.f425fb9b.js";import{_ as y}from"./_plugin-vue_export-helper.c114f5e4.js";import{f as B}from"./links.6fea55de.js";import{B as A}from"./RadioToggle.2bcafbe9.js";const j={components:{BaseTextarea:w,CoreBlur:k,CoreSettingsRow:S,Cta:T},props:{type:{type:String,required:!0},object:{type:Object,required:!0}},data(){return{strings:{customFields:this.$t.__("Custom Fields",this.$td),customFieldsDescription:this.$t.__("List of custom field names to include as post content for tags and the SEO Page Analysis. Add one per line.",this.$td),ctaDescription:this.$t.sprintf(this.$t.__("%1$s %2$s gives you advanced customizations for our page analysis feature, letting you add custom fields to analyze.",this.$td),"AIOSEO","Pro"),ctaButtonText:this.$t.__("Unlock Custom Fields",this.$td),ctaHeader:this.$t.sprintf(this.$t.__("Custom Fields is a %1$s Feature",this.$td),"PRO")}}},methods:{getSchemaTypeOption(s){return this.schemaTypes.find(r=>r.value===s)}}},C={class:"aioseo-sa-ct-custom-fields lite"},P={class:"aioseo-description"};function U(s,r,e,_,t,p){const a=o("base-textarea"),c=o("core-settings-row"),h=o("core-blur"),d=o("cta");return l(),g("div",C,[n(h,null,{default:i(()=>[n(c,{name:t.strings.customFields,align:""},{content:i(()=>[n(a,{"min-height":200}),x("div",P,u(t.strings.customFieldsDescription),1)]),_:1},8,["name"])]),_:1}),n(d,{"cta-link":s.$links.getPricingUrl("custom-fields","custom-fields-upsell",`${e.object.name}-post-type`),"button-text":t.strings.ctaButtonText,"learn-more-link":s.$links.getUpsellUrl("custom-fields",e.object.name,s.$isPro?"pricing":"liteUpgrade")},{"header-text":i(()=>[m(u(t.strings.ctaHeader),1)]),description:i(()=>[m(u(t.strings.ctaDescription),1)]),_:1},8,["cta-link","button-text","learn-more-link"])])}const J=y(j,[["render",U]]);const O={components:{BaseRadioToggle:A,CoreBlur:k,CoreSettingsRow:S,Cta:T},props:{type:{type:String,required:!0},object:{type:Object,required:!0}},data(){return{schemaTypes:[{value:"none",label:this.$t.__("None",this.$td)},{value:"Article",label:this.$t.__("Article",this.$td)}],strings:{schemaType:this.$t.__("Schema Type",this.$td),articleType:this.$t.__("Article Type",this.$td),article:this.$t.__("Article",this.$td),blogPost:this.$t.__("Blog Post",this.$td),newsArticle:this.$t.__("News Article",this.$td),ctaDescription:this.$t.__("Easily generate unlimited schema markup for your content to help you rank higher in search results. Our schema validator ensures your schema works out of the box.",this.$td),ctaButtonText:this.$t.__("Unlock Schema Markup Generator",this.$td),ctaHeader:this.$t.sprintf(this.$t.__("Schema Markup Generator is a %1$s Feature",this.$td),"PRO")},features:[this.$t.__("Unlimited Schema",this.$td),this.$t.__("Validate with Google",this.$td),this.$t.__("Increase Rankings",this.$td),this.$t.__("Additional Schema Types",this.$td)]}},methods:{getSchemaTypeOption(s){return this.schemaTypes.find(r=>r.value===s)}}},F={class:"aioseo-sa-ct-schema-lite"};function D(s,r,e,_,t,p){const a=o("base-select"),c=o("core-settings-row"),h=o("base-radio-toggle"),d=o("core-blur"),v=o("cta");return l(),g("div",F,[n(d,null,{default:i(()=>[n(c,{name:t.strings.schemaType,align:""},{content:i(()=>[n(a,{size:"medium",class:"schema-type",options:t.schemaTypes,modelValue:p.getSchemaTypeOption("Article")},null,8,["options","modelValue"])]),_:1},8,["name"]),n(c,{name:t.strings.articleType,align:""},{content:i(()=>[n(h,{name:`${e.object.name}articleType`,modelValue:"BlogPosting",options:[{label:t.strings.article,value:"Article"},{label:t.strings.blogPost,value:"BlogPosting"},{label:t.strings.newsArticle,value:"NewsArticle"}]},null,8,["name","options"])]),_:1},8,["name"])]),_:1}),n(v,{"cta-link":s.$links.getPricingUrl("schema-markup","schema-markup-upsell"),"button-text":t.strings.ctaButtonText,"learn-more-link":s.$links.getUpsellUrl("schema-markup",null,s.$isPro?"pricing":"liteUpgrade"),"feature-list":t.features},{"header-text":i(()=>[m(u(t.strings.ctaHeader),1)]),description:i(()=>[m(u(t.strings.ctaDescription),1)]),_:1},8,["cta-link","button-text","learn-more-link","feature-list"])])}const $=y(O,[["render",D]]),V={setup(){return{licenseStore:B()}},components:{Schema:$,SchemaLite:$},props:{type:{type:String,required:!0},object:{type:Object,required:!0},options:{type:Object,required:!0},showBulk:Boolean}},q={class:"aioseo-sa-ct-schema-view"};function N(s,r,e,_,t,p){const a=o("schema",!0),c=o("schema-lite");return l(),g("div",q,[_.licenseStore.isUnlicensed?b("",!0):(l(),f(a,{key:0,type:e.type,object:e.object,options:e.options,"show-bulk":e.showBulk},null,8,["type","object","options","show-bulk"])),_.licenseStore.isUnlicensed?(l(),f(c,{key:1,type:e.type,object:e.object,options:e.options,"show-bulk":e.showBulk},null,8,["type","object","options","show-bulk"])):b("",!0)])}const K=y(V,[["render",N]]);export{J as C,K as S};
