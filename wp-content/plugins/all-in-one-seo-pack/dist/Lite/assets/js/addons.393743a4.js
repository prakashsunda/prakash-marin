import{c as a}from"./links.6fea55de.js";import{u as c}from"./upperFirst.62b3e825.js";const s=t=>{const n=a();return n.addons.length?n.addons.find(r=>t===r.sku):null},u=t=>{const n=s(t);return n&&n.isActive},i=t=>{const n=s(t);return n&&n.installed},l=t=>{const n=s(t);return!n||n.requiresUpgrade},d=t=>{const n=s(t);return n&&!n.isActive},o=t=>{const n=s(t);return n&&n.installed&&!n.isActive&&n.canActivate},e=t=>{const n=s(t);return n&&!n.installed&&n.canInstall},p=t=>e(t)||o(t),m=t=>{const n=s(t);return n&&n.canUpdate},A=t=>{const n=s(t);return n?n.currentLevels.map(r=>c(r)):null},_=t=>{const n=s(t);return n&&n.hasMinimumVersion},g={canActivate:d,currentPlans:A,getAddon:s,hasMinimumVersion:_,isActive:u,isInstalled:i,requiresUpgrade:l,userCanActivate:o,userCanInstall:e,userCanInstallOrActivate:p,userCanUpdate:m};export{g as a};
