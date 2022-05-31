const { sanitizeEntity } = require('strapi-utils');

module.exports = {
  /**
   * Retrieve a record.
   *
   * @return {Object}
   */

 
  // API Khusus Buat Arsip Kerjasama
  async index(){
    const response = await strapi.services.arsipkerjasama.find({ _limit: 4, _sort: 'published_at:desc'});
    return sanitizeEntity(response, { model: strapi.models.arsipkerjasama });
  },
};
