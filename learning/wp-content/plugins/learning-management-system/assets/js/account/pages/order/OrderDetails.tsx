import {
	Divider,
	FormLabel,
	Heading,
	Stack,
	Tag,
	Text,
	useToast,
} from '@chakra-ui/react';
import { sprintf, __ } from '@wordpress/i18n';
import React from 'react';
import { Col, Row } from 'react-grid-system';
import { useQuery } from 'react-query';
import { useParams } from 'react-router-dom';
import FullScreenLoader from '../../../back-end/components/layout/FullScreenLoader';
import urls from '../../../back-end/constants/urls';
import { OrderItemSchema, OrderSchema } from '../../../back-end/schemas';
import API from '../../../back-end/utils/api';
import { getWordpressLocalTime, isEmpty } from '../../../back-end/utils/utils';

interface countrySchema {
	code: string;
	name: string;
}

interface stateSchema {
	country: string;
	states: {
		code: string;
		name: string;
	};
}

const OrderDetails: React.FC = () => {
	const ordersAPI = new API(urls.orders);
	const orderItemsAPI = new API(urls.order_items);
	const countriesAPI = new API(urls.countries);
	const statesAPI = new API(urls.states);

	const { orderId }: any = useParams();
	const toast = useToast();

	const countriesQuery = useQuery('countries', () => countriesAPI.list());
	const statesQuery = useQuery('states', () => statesAPI.list());

	const orderQuery = useQuery<OrderSchema>([`myOrder${orderId}`, orderId], () =>
		ordersAPI.get(orderId)
	);

	const orderItemsQuery = useQuery(
		'orderItemsList',
		() =>
			orderItemsAPI.list({
				order_id: orderId,
			}),
		{
			onError: (error: any) => {
				toast({
					description: `${error.response?.data?.message}`,
					isClosable: true,
					status: 'error',
				});
			},
		}
	);
	if (
		orderQuery.isSuccess &&
		countriesQuery.isSuccess &&
		statesQuery.isSuccess
	) {
		// Get country data of selected country.
		const selectedCountry: countrySchema = countriesQuery?.data.filter(
			(countryData: countrySchema) =>
				countryData.code === orderQuery?.data?.billing?.country
		);

		// Get state data of selected country.
		const countryStateData: stateSchema = statesQuery?.data.filter(
			(stateData: stateSchema) =>
				stateData.country === orderQuery?.data?.billing?.country
		);

		// Get state data of selected state.
		const selectedStateData = !isEmpty(countryStateData)
			? countryStateData[0]?.states.filter(
					(stateData: countrySchema) =>
						stateData.code === orderQuery?.data?.billing?.state
			  )
			: {};

		return (
			<Stack
				direction="column"
				spacing="8"
				width="full"
				className="mto-orders-detail-wrapper"
			>
				<Heading as="h4" size="md" fontWeight="bold" color="primary.900">
					{sprintf(__('Order #%s', 'masteriyo'), orderQuery?.data?.id)}
				</Heading>
				<Row gutterWidth={30}>
					<Col>
						<FormLabel>{__('Date Created', 'masteriyo')}</FormLabel>
						<Text fontSize="sm">
							{getWordpressLocalTime(orderQuery?.data?.date_created)}
						</Text>
					</Col>
					<Col>
						<Row gutterWidth={30}>
							<Col>
								<FormLabel>{__('First Name', 'masteriyo')}</FormLabel>
								<Text>{orderQuery?.data?.billing?.first_name}</Text>
							</Col>
							<Col>
								<FormLabel>{__('Last Name', 'masteriyo')}</FormLabel>
								<Text>{orderQuery?.data?.billing?.last_name}</Text>
							</Col>
						</Row>
					</Col>
				</Row>

				<Row gutterWidth={30}>
					<Col>
						<FormLabel>{__('Status', 'masteriyo')}</FormLabel>
						<Tag>{orderQuery?.data?.status}</Tag>
					</Col>
					<Col>
						<Row gutterWidth={30}>
							<Col>
								<FormLabel>{__('Email', 'masteriyo')}</FormLabel>
								<Text>{orderQuery?.data?.billing?.email}</Text>
							</Col>
							<Col>
								<FormLabel>{__('Phone Number', 'masteriyo')}</FormLabel>
								<Text>{orderQuery?.data?.billing?.phone}</Text>
							</Col>
						</Row>
					</Col>
				</Row>
				<Row gutterWidth={30}>
					<Col>
						<FormLabel>{__('Payment Method', 'masteriyo')}</FormLabel>
						<Text>{orderQuery?.data?.payment_method}</Text>
					</Col>
					<Col>
						<Row gutterWidth={30}>
							<Col>
								<FormLabel>{__('Address 1', 'masteriyo')}</FormLabel>
								<Text>{orderQuery?.data?.billing?.address_1}</Text>
							</Col>
							<Col>
								<FormLabel>{__('Address 2', 'masteriyo')}</FormLabel>
								<Text>{orderQuery?.data?.billing?.address_2}</Text>
							</Col>
						</Row>
					</Col>
				</Row>
				<Row gutterWidth={30}>
					<Col>
						<FormLabel>{__('Transaction ID', 'masteriyo')}</FormLabel>
						<Text>{orderQuery?.data?.transaction_id}</Text>
					</Col>
					<Col>
						<Row gutterWidth={30}>
							<Col>
								<FormLabel>{__('Company', 'masteriyo')}</FormLabel>
								<Text>{orderQuery?.data?.billing?.company}</Text>
							</Col>
							<Col>
								<FormLabel>{__('Postcode', 'masteriyo')}</FormLabel>
								<Text>{orderQuery?.data?.billing?.postcode}</Text>
							</Col>
						</Row>
					</Col>
				</Row>
				<Row gutterWidth={30}>
					<Col></Col>
					<Col>
						<Row gutterWidth={30}>
							<Col>
								<FormLabel>{__('Country', 'masteriyo')}</FormLabel>
								<Text>{selectedCountry[0]?.name}</Text>
							</Col>
							<Col>
								<FormLabel>{__('State', 'masteriyo')}</FormLabel>
								<Text>{selectedStateData[0]?.name}</Text>
							</Col>
						</Row>
					</Col>
				</Row>
				<Row gutterWidth={30}>
					<Col></Col>
					<Col>
						<Row gutterWidth={30}>
							<Col>
								<FormLabel>{__('City', 'masteriyo')}</FormLabel>
								<Text>{orderQuery?.data?.billing?.city}</Text>
							</Col>
							<Col>
								<FormLabel>{__('Customer Note', 'masteriyo')}</FormLabel>
								<Text>{orderQuery?.data?.customer_note}</Text>
							</Col>
						</Row>
					</Col>
				</Row>

				<Divider />

				{orderItemsQuery.isSuccess &&
					orderItemsQuery.data.map((orderItem: OrderItemSchema) => (
						<Stack key={orderItem.id} direction="row" spacing="6">
							<Text flexGrow={1} fontWeight="semibold">
								{orderItem.name}
							</Text>
							<Text fontSize="sm" fontWeight="medium" color="gray.600">
								x {orderItem.quantity}
							</Text>
							<Text fontSize="sm" fontWeight="medium" color="gray.600">
								{orderQuery?.data?.formatted_total}
							</Text>
						</Stack>
					))}
			</Stack>
		);
	}

	return <FullScreenLoader />;
};

export default OrderDetails;
