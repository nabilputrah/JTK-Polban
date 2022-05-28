const { sanitizeEntity } = require('strapi-utils');

module.exports = {
  /**
   * Retrieve a record.
   *
   * @return {Object}
   */

  async findOne(ctx) {
    const { slug } = ctx.params;

    const entity = await strapi.services.article.findOne({ slug });
    return sanitizeEntity(entity, { model: strapi.models.article });
  },
  // API Khusus Buat News
  async index(){
    const response = await strapi.services.article.find({ _limit: 4, _sort: 'published_at:desc'});
    return sanitizeEntity(response, { model: strapi.models.article });
  },
};
