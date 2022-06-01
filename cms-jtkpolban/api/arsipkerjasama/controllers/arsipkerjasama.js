const { sanitizeEntity } = require('strapi-utils');

module.exports = {
  /**
   * Retrieve a record.
   *
   * @return {Object}
   */

  async findOne(ctx) {
    const { slug } = ctx.params;

    const entity = await strapi.services.arsipkerjasama.findOne({ slug });
    return sanitizeEntity(entity, { model: strapi.models.arsipkerjasama });
  },
  // API Khusus Buat index
  async index(){
    const response = await strapi.services.arsipkerjasama.find({ _limit: 4, _sort: 'published_at:desc'});
    return sanitizeEntity(response, { model: strapi.models.arsipkerjasama });
  },
};
